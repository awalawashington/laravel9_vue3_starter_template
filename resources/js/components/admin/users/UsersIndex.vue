<template>
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>User ID</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="item in users" :key="item.id">
                    <td>{{item.name}}</td>
                    <td>{{item.user_id}}</td>
                    <td>{{item.status}}</td>
                    <td>{{item.created_at}}</td>
                    <td>                                                       
                      <a href="#" @click="handleEdit(item.id)" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                      <el-popconfirm confirm-button-text="Yes"
                        cancel-button-text="No"
                        :icon="InfoFilled"
                        icon-color="red"
                        title="Are you sure to delete this?"
                        @confirm="deleteUser(item.id, item.name)"
                        @cancel="cancelEvent">
                        <template #reference>
                          <el-link class="mr-2"><i class="fas fa-trash-alt text-danger font-16"></i></el-link>
                        </template>
                      </el-popconfirm>
                    </td>
                </tr>
                </tbody>
            </table>        
        </div>
    </div>
  </div>
</template>

<script>
import { onMounted } from '@vue/runtime-core';
import useUsers from "../../../composables/users.js";

export default {
    setup(){
        const {users, getUsers, editUser, destroyUser} = useUsers()
     
        onMounted(getUsers)

        const viewUser = async (id) => {
            window.location = '/admin/users/edit/' + id
        }

        const deleteUser = async (id, name) => {
            destroyUser(id, name)
        }

        const cancelEvent = async () => {
            return false
        }

        const handleEdit = async (id) => {
            editUser(id)
        }

        return{
            users,
            viewUser,
            handleEdit,
            deleteUser,
            cancelEvent
        }
    }
}
</script>

<style>

</style>