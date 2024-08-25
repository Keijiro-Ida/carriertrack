<template>
    <div>
        <h1>応募先企業一覧</h1>
        <table class="table table-striped" v-if="applications.length > 0">
            <thead>
                <tr>
                    <th>会社名</th>
                    <th>URL</th>
                    <th>アクション</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="application in applications" :key="application.id">
                    <td>{{ application.company_name }}</td>
                    <td><a :href="application.url" target="_blank">{{ application.url }}</a></td>
                    <td>
                        <button class="btn btn-primary btn-sm" @click="editApplication(application)">編集</button>
                        <button class="btn btn-danger btn-sm" @click="deleteApplication(application.id)">削除</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <p v-else>現在、登録された企業はありません。</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            applications: [],
        };
    },
    mounted() {
        this.fetchApplications();
    },
    methods: {
        fetchApplications() {
            axios.get('/api/applications')
                .then(response => {
                    this.applications = response.data;
                })
                .catch(error => {
                    console.error("Error fetching applications:", error);
                });
        },
        editApplication(application) {
            console.log("Editing application:", application);
        },
        deleteApplication(id) {
            if (confirm('本当に削除しますか？')) {
                axios.delete(`/api/applications/${id}`)
                    .then(response => {
                        this.applications = this.applications.filter(app => app.id !== id);
                    })
                    .catch(error => {
                        console.error("Error deleting application:", error);
                    });
            }
        }
    }
};
</script>
