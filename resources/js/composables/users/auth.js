import axios from "axios";
import { ref, useSSRContext } from "vue";
import { ElNotification } from 'element-plus'


export default function useUsers() {
    const errors = ref('')

    //submit email for verification
    const submitEmail = async (c, route, data) => {
        errors.value = ''
        try {
            const {data:response} = await axios.post(route, data)

            notification('Success', 'Email verification code sent successfully', 'success')

            await secondsDelay(3)
           
            await c.emit('hideEmail', response.data)

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

    //submit code for verification
    const submitCode = async (c, route, data) => {
        errors.value = ''
        try {
            const {data:response} = await axios.post(route, data)

            notification('Success', 'Code verified', 'success')

            await secondsDelay(3)
           
            await c.emit('hideCode', response.data)

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

    //user registration
    const register = async (c, data) => {
        errors.value = ''
        try {
            const {data:response} = await axios.post('/user/registration/register', data)

            notification('Success', 'Successfully Registered', 'success')

            await secondsDelay(3)

            window.location = '/user/login'
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

    //password reset
    const passwordReset = async (c, data) => {
        errors.value = ''
        try {
            const {data:response} = await axios.put('/user/password/reset', data)

            notification('Success', 'Password successfully reset', 'success')

            await secondsDelay(3)

            window.location = '/user/login'
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
        submitEmail,
        submitCode,
        register,
        passwordReset
    }
}