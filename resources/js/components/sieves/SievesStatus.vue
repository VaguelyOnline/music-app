<template>
  <div class="card">
    <div class="card-header">Sieve Jobs</div>
    <div class="card-body">
      <div class="list-group">
        <a href="#" v-for="job in jobs" class="list-group-item" :class="getStatusClass(job)">
          {{ job.userName }} / {{ job.status }}
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SievesStatus",
  data() {
    return {
      jobs: []
    };
  },

  mounted() {
    // this.jobs = [
    //   {
    //     userName: "Manel",
    //     size: 100,
    //     status: "pending"
    //   },
    //   {
    //     userName: "Alice",
    //     size: 200,
    //     status: "complete"
    //   }
    // ];
    this.loadJobs();
  },

  methods: {
    getStatusClass(job) {
      if (job.status == "complete") return "list-group-item-success";
      else return "list-group-item-default";
    },

    loadJobs() {
      // fetch the jobs with their status' from /api/jobs (SieveController@apiJobs)
    }
  }
};
</script>

<style scoped></style>
