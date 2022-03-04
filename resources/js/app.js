require('./bootstrap');

import { createApp } from 'vue';


import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'

let app=createApp({})

app.component('user-index', require('./components/admin/users/UsersIndex').default);
app.component('user-view', require('./components/admin/users/usersView').default);
app.component('user-create', require('./components/admin/users/usersStore').default);
app.component('user-edit', require('./components/admin/users/usersEdit').default);

app.component('admin-password', require('./components/admin/auth/Password').default);
app.component('admin-settings-account', require('./components/admin/settings/Account').default);
app.component('admin-settings-profile', require('./components/admin/settings/Profile').default);
app.component('admin-settings-password', require('./components/admin/settings/Password').default);

app.component('user-password', require('./components/user/auth/password_reset/Password').default);
app.component('user-registration', require('./components/user/auth/registration/Registration').default);

app.use(ElementPlus)
app.mount("#app");


