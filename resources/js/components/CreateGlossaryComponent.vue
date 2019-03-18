<template>
    <div class="cms-content__item">
        <div class="col-12 pt-1 pb-5 d-flex justify-content-between">
            <div class="form-group">
                <label for="chapterName">Название раздела</label>
                <input type="text" class="form-control" id="chapterName" placeholder="Название раздела" v-model="chapter.title">
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary">Создать раздел</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CreateGlossaryComponent",
        data(){
            return{
                chapter:{
                    title: '',
                },
                glossary:{

                }
            }
        },
        methods:{
            saveChapter(){
                axios.post('/admin-dashboard/save-chapter', this.chapter).then(res => {
                    
                });
            }
        }
    }
</script>

<style scoped>

</style>
