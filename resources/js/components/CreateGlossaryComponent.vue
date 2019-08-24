<template>
    <div class="glossaryEdit">
        <div class="glossaryEdit__addNewGlossary">
            <div class="glossaryEdit__inputBlock">
                <label for="">Раздел</label>
                <input type="text" v-model="chapter.title">
            </div>
            <div class="glossaryEdit__inputBlock">
                <label for="">Мета заголовок</label>
                <input type="text">
            </div>
            <div class="glossaryEdit__inputBlock">
                <label for="">Описание</label>
                <textarea name="" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="glossaryEdit__inputBlock">
                <label for="">Заголовок</label>
                <input type="text">
            </div>
            <div class="glossaryEdit__inputBlock">
                <label for="">Текст</label>
                <textarea name="" id="" cols="30" rows="5"></textarea>
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
            },
            findChapter(event){
                console.log(event.key)
            }
        },
    }
</script>

<style scoped>

</style>
