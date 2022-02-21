import axios from "axios";
import { ref, useSSRContext } from "vue";
import { ElNotification } from 'element-plus'


export default function useUsers() {
    const users = ref([])
    const errors = ref('')

    //async function to get users
    const getUsers = async () => {
        let response = await axios.get('/admin/users')
        users.value = response.data.data
    }

    //Create user
    const storeUser = async (data) => {
        errors.value = ''
        try {
            const {data:response} = await axios.post('/admin/users', data)

            notification('Success', 'Employee ' + data.name + ' successfully created', 'success')

            await secondsDelay(3);
            window.location = '/admin/users/index'
            await window.location  

        } catch (e) {
            if (e.response.status === 422) {
                console.log(e.response.data)
                for (const key in e.response.data.errors) {
                    notification('Warning', e.response.data.errors[key][0], 'warning')
                    await secondsDelay(0.00001)
                }
            }else{
                notification('Error', 'Server Error: ' + e.response.status, 'error')
            }
        }
    }

    //update user
    const updateUser = async (id, data) => {
        errors.value = ''
        try {
            const {data:response} = await axios.put('/admin/users/' + id, data)

            notification('Success', 'Employee ' + data.name + ' successfully updated', 'success')

            await secondsDelay(3);
            window.location = '/admin/users/index'
            await window.location
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    notification('Warning', e.response.data.errors[key][0], 'warning')
                    await secondsDelay(0.00001)
                }
            }else{
                notification('Error', 'Server Error: ' + e.response.status, 'error')
            }
        }
    }

    //edit user link
    const editUser = async (id) =>{
        window.location = '/admin/users/edit/' + id
    }

    //delete user
    const destroyUser = async (id, name) =>{
        try {
            const {data:response} = await axios.delete('/admin/users/' + id)
            
            notification('Success', 'Employee ' + name + ' successfully deleted', 'success')
            await secondsDelay(3);
            window.location = '/admin/users/index'
            await window.location
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + '';
                }
            }else{
                
            }
        }
    }

    const secondsDelay = (n) => {
        return new Promise(resolve => {
          setTimeout(() => {
            resolve();
          }, n * 1000);
        });
    }

    const notification = (title, message, type) => {
        ElNotification({
            title: title,
            message: message,
            position: 'bottom-right',
            type: type,
            duration: 3000, 
        })
    }

    return{
        users,
        errors,
        getUsers,
        storeUser,
        updateUser,
        editUser,
        destroyUser
    }
}