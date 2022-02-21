import axios from "axios";
import { ref, useSSRContext } from "vue";
import { ElNotification } from 'element-plus'


export default function useUsers() {
    const errors = ref('')

    //update admin profile
    const updateAccount = async (data) => {
        errors.value = ''
        try {
            const {data:response} = await axios.put('/admin/settings/account', data)

            notification('Success', 'Account successfully updated', 'success')

            await secondsDelay(3);
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

    //update admin profile
    const updateProfile = async (data) => {
        errors.value = ''
        try {
            const {data:response} = await axios.put('/admin/settings/profile', data)

            notification('Success', 'Profile successfully updated', 'success')

            await secondsDelay(3);
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

    //update admin password
    const updatePassword = async (data) => {
        errors.value = ''
        try {
            await axios.put('/admin/settings/password', data)

            notification('Success', 'Password successfully changed', 'success')

            await secondsDelay(3);
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
        errors,
        updateAccount,
        updateProfile,
        updatePassword
    }
}