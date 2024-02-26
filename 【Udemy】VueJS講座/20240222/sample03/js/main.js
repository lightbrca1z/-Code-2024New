const app = Vue.createApp({
    data: () => ({
        message: 'Hello <span style="color:blue">Vue.js!</span>',
        userInput:''
    })
})
app.mount('#app')

