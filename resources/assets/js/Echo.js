import store from './vuex/store'

const typesNotifications = {
    postCommented: 'App\\Notifications\\PostCommented',
}

if (Laravel.user) {
    Echo.private(`App.Models.User.${Laravel.user}`)
            .notification(notification => {
                if (notification.type == typesNotifications.postCommented) {
                    store.commit('ADD_NOTIFICATION', notification)
                }
            })
}