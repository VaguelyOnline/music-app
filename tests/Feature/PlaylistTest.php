<?php

namespace Tests\Feature;

use App\Models\Playlist;
use App\Models\User;
use Tests\TestCase;

class PlaylistTest extends TestCase
{
    private User $owner;
    private Playlist $playlist;
    private User $otherUser;
    private string $url;

    public function setUp(): void
    {
        parent::setUp();

        // This approach uses the UserFactory. You do not have to use factories - but this is one 
        // major reason to have them - they make mocking users for testing easier
        $this->owner = User::factory()->create();
        $this->otherUser = User::factory()->create();
        
        // The details of the playlist do not matter at all - all that maters is that the playlist
        // is linked to one of the users - so that we can make assertions about what different
        // users can and can not do with a playlist.
        $this->playlist = $this->owner->playlists()->create([
            'name' => 'Test playlist',
            'image' => 'http://example.com/image.jpg'
        ]);

        $this->url = route('playlists.show', $this->playlist);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_non_logged_in_users_cannot_view_specific_playlists()
    {
        $this->get($this->url)->assertForbidden();
    }

    
    public function test_a_non_owner_of_the_playlist_is_not_allowed_to_view_the_playlist()
    {
        $this->actingAs($this->otherUser)
            ->get($this->url)
            ->assertForbidden();
    }

    public function test_the_playlist_owner_can_view_the_playlist()
    {
        $this->actingAs($this->owner)
            ->get($this->url)
            ->assertStatus(200)
            ->assertSeeText($this->playlist->name);
    }
}
