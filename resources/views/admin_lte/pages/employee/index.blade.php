@extends('admin_lte.shares.master_lte')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản Lý Nhân Viên</h1>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div id="app" class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Thêm Mới Nhân Viên
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Họ Và Tên</label>
                            <input v-model="add.ho_va_ten" type="text" class="form-control" placeholder="Nhập vào họ và tên">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input v-model="add.email" type="email" class="form-control" placeholder="Nhập vào email">
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input v-model="add.so_dien_thoai" type="tel" class="form-control" placeholder="Nhập vào số điện thoại">
                        </div>
                        <div class="form-group">
                            <label>Hình Ảnh</label>
                            <input v-model="add.hinh_anh" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Mô tả chi tiết</label>
                            <textarea class="form-control" name="mo_ta_chi_tiet" v-model="add.mo_ta_chi_tiet" cols="30" rows="7" placeholder="Nhập vào mô tả chi tiết nhân viên"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ngày Sinh</label>
                            <input v-model="add.ngay_sinh" type="date" class="form-control" placeholder="Nhập vào ngày sinh">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input v-model="add.facebook" type="text" class="form-control" placeholder="Nhập facebook">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input v-model="add.instagram" type="text" class="form-control" placeholder="Nhập insta">
                        </div>
                        <div class="form-group">
                            <label>Chức vụ</label>
                            <input v-model="add.chuc_vu" type="text" class="form-control" placeholder="Nhập chức vụ">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" v-on:click="themMoi()">Thêm Mới Nhân Viên</button>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Danh Sách Tài Khoản Admin
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Họ Và Tên</th>
                                    <th class="text-center">Số Điện Thoại</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Ngày Sinh</th>
                                    <th class="text-center">Hình Ảnh</th>
                                    <th class="text-center">Chức vụ</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(v, k) in arr">
                                    <th class="text-center align-middle">@{{ k + 1 }}</th>
                                    <td class="align-middle">@{{ v.ho_va_ten }}</td>
                                    <td class="align-middle text-center">@{{ v.so_dien_thoai }}</td>
                                    <td class="align-middle">@{{ v.email }}</td>
                                    <td class="align-middle">@{{ v.ngay_sinh }}</td>
                                    <th class="text-center" scope="col">
                                        <img v-bind:src="v.hinh_anh"  class="img-thumbnail" style="max-height: 50px" />
                                    </th>
                                    <td class="align-middle">@{{ v.chuc_vu }}</td>

                                    <td class="align-middle text-center">
                                        <button v-on:click="del = v" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xoá</button>
                                    </td>
                                </tr>
                            </tbody>
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" id="id_delete" class="form-control">
                                        Bạn có chắc chắn muốn xóa dữ liệu hay không?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                                      <button data-dismiss="modal" v-on:click="accept_delete()" type="button" class="btn btn-primary">Chắc chắn</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
                new Vue({
                    el : '#app',
                    data : {
                        add : {},
                        arr : [],
                        del : {},
                    },
                    created(){
                    this.get();
                },
                methods : {
                    themMoi(){

            axios
                .post('/admin-lte/employee/create', this.add)
                .then((res) => {
                    if(res.data.status) {
                        toastr.success(res.data.mess);
                        this.get();
                    } else if(res.data.status == 0) {
                        toastr.error(res.data.mess);
                    } else if(res.data.status == 2) {
                        toastr.warning(res.data.mess);
                    }

                })
                .catch((res) => {
                    var listE = res.response.data.errors;
                    $.each(listE, function(k, v) {
                    toastr.error(v[0]);
                });
                });
            },
            get(){
                        axios
                            .get('/admin-lte/employee/data')
                            .then((res) => {
                                this.arr = res.data.list;
                            });
                    },
        accept_delete(){
            axios
                .post('/admin-lte/employee/delete', this.del)
                .then((res) => {
                    if(res.data.status) {
                         toastr.success(res.data.mess);
                         this.get();
                    } else if(res.data.status == 0) {
                         toastr.error(res.data.mess);
                    } else if(res.data.status == 2) {
                         toastr.warning(res.data.mess);
                    }

                 })
                .catch((res) => {
                    var listE = res.response.data.errors;
                     $.each(listE, function(k, v) {
                     toastr.error(v[0]);
                 });
                });
        },

                },
                })
</script>
@endsection
