<?php

namespace Tests\Unit;

use App\Models\Playlist;
use App\Models\User;
use App\Policies\PlaylistPolicy;
use PHPUnit\Framework\TestCase;

class PlaylistPolicyTest extends TestCase
{
    private User $owner;
    private User $other;
    private Playlist $playlist;
    private PlaylistPolicy $policy;

    public function setUp(): void
    {
        parent::setUp();


        $this->policy = new PlaylistPolicy();
        $this->owner = new User();
        $this->owner->id = 1;

        $this->playlist = new Playlist(['user_id' => 1]);

        $this->other = new User();
        $this->other->id = 2;
    }


    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_playlist_owner_can_view_their_own_playlist()
    {

        $this->assertTrue(
            $this->policy->view($this->owner, $this->playlist)
        );

        // If this were a feature test, we could also:
        // $this->assertTrue($this->owner->can('view', $this->playlist));
    }

    public function test_users_cannot_view_playlists_that_are_not_theirs()
    {
    
        $this->assertFalse(
            $this->policy->view($this->other, $this->playlist)
        );

        // $this->assertFalse($this->other->can('view', $this->playlist));
        // $this->assertTrue($this->other->cant('view', $this->playlist));
    }
}
