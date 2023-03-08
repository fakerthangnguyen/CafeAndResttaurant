@extends('admin_lte.shares.master_lte')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản Lý Sản Phẩm</h1>
            </div>
        </div>
    </div>
    <section class="content" id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Thêm Mới Sản Phẩm
                        </div>
                        <div class="card-body">
                        <form id="form_create">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tên Sản Phẩm</label>
                                        <input v-model="add.ten_san_pham" type="text" class="form-control" placeholder="Nhập vào tên sản phẩm">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Slug Sản Phẩm</label>
                                        <input v-model="add.slug_san_pham" type="text" class="form-control" placeholder="Nhập vào slug sản phẩm">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Hình Ảnh Sản Phẩm</label>
                                        <div class="input-group">
                                            <input v-model="add.hinh_anh" class="form-control" type="text" name="filepath">
                                            <span class="input-group-prepend">
                                              <a id="lfm" data-input="hinh_anh" data-preview="holder" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                              </a>
                                            </span>
                                        </div>
                                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Giá Bán</label>
                                        <input v-model="add.gia_ban" type="number" step="1000" min="0" class="form-control" placeholder="Nhập vào giá bán">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Giá Khuyến Mãi</label>
                                        <input v-model="add.gia_khuyen_mai" step="1000" type="number" min="0" class="form-control" placeholder="Nhập vào giá khuyến mãi">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tình Trạng</label>
                                        <select v-model="add.is_open" class="form-control">
                                            <option value="1">Hiển Thị</option>
                                            <option value="0">Tạm tắt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Loại Sản Phẩm</label>
                                        <select v-model="add.id_loai_san_pham" class="form-control">
                                            @foreach ($loaiSP as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->ten_loai_san_pham }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Mô Tả Ngắn</label>
                                        <textarea class="form-control" v-model="add.mo_ta_ngan" cols="30" rows="3" placeholder="Nhập vào mô tả ngắn của sản phẩm"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Mô Tả Chi Tiết</label>
                                        <textarea class="form-control" name="mo_ta_chi_tiet" v-model="add.mo_ta_chi_tiet" cols="30" rows="7" placeholder="Nhập vào mô tả chi tiết của sản phẩm"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="card-footer text-right">
                            <button v-on:click="themMoi()" class="btn btn-primary" >Thêm Mới Sản Phẩm</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            Danh Sách Sản Phẩm
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered " id="table">
                                <thead>
                                    <tr>
                                        <th class="text-center text-nowrap">#</th>
                                        <th class="text-center text-nowrap">Tên Sản Phẩm</th>
                                        <th class="text-center text-nowrap">Hình Ảnh</th>
                                        <th class="text-center text-nowrap">Mô Tả</th>
                                        <th class="text-center text-nowrap">Giá Bán</th>
                                        <th class="text-center text-nowrap">Giá Khuyến Mãi</th>
                                        <th class="text-center text-nowrap">Tình Trạng</th>
                                        <th class="text-center text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(v , k) in arr">
                                        <tr>
                                            <td class="text-center align-middle">@{{k +1}}</td>
                                            <th class="text-center" scope="col">@{{v.ten_san_pham}}</th>
                                            <th class="text-center" scope="col">
                                                <img v-bind:src="v.hinh_anh"  class="img-thumbnail" style="max-height: 50px" />
                                            </th>
                                            <th class="text-center" scope="col">@{{v.mo_ta_chi_tiet}}</th>
                                            <th class="text-center" scope="col">@{{v.gia_ban}}</th>
                                            <th class="text-center" scope="col">@{{v.gia_khuyen_mai}}</th>

                                            <th class="text-center align-middle" scope="col">

                                               <button v-on:click="status(v)" class="status btn btn-primary" v-if="v.is_open ==1">Hiển thị</button>
                                               <button v-on:click="status(v)" class="status btn btn-info"v-else>Tạm tắt</button>
                                            </th>


                                            <td class="text-center text-nowrap">
                                                <button v-on:click="edit = v" class="btn btn-info" data-toggle="modal" data-target="#updateModal">Cập nhật</button>
                                                <button v-on:click="del = v" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xoá</button>
                                            </td>
                                        </tr>
                                    </template>

                                </tbody>
                            </table>
                        </div>
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
                            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <input v-model="edit.id" type="hidden" class="form-control" placeholder="Nhập vào tên sản phẩm">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Tên Sản Phẩm</label>
                                                    <input v-model="edit.ten_san_pham" type="text" class="form-control" placeholder="Nhập vào tên sản phẩm">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Slug Sản Phẩm</label>
                                                    <input v-model="edit.slug_san_pham" type="text" class="form-control" placeholder="Nhập vào slug sản phẩm">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Hình Ảnh Sản Phẩm</label>
                                                    <input v-model="edit.hinh_anh" type="text" class="form-control" placeholder="Nhập vào hình ảnh sản phẩm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Giá Bán</label>
                                                    <input v-model="edit.gia_ban" type="text" min="0" class="form-control" placeholder="Nhập vào giá bán">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Giá Khuyến Mãi</label>
                                                    <input v-model="edit.gia_khuyen_mai" type="text" min="0" class="form-control" placeholder="Nhập vào giá khuyến mãi">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Tình Trạng</label>
                                                    <select v-model="edit.is_open" class="form-control">
                                                        <option value="1">Hiển Thị</option>
                                                        <option value="0">Dừng Kinh Doanh</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Loại Sản Phẩm</label>
                                                    <select v-model="edit.id_loai_san_pham" class="form-control">
                                                        @foreach ($loaiSP as $key => $value)
                                                            <option value="{{ $value->id }}">{{ $value->ten_loai_san_pham }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Mô Tả Ngắn</label>
                                                    <textarea class="form-control" v-model="edit.mo_ta_ngan" cols="30" rows="3" placeholder="Nhập vào mô tả ngắn của sản phẩm"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Mô Tả Chi Tiết</label>
                                                    <textarea class="form-control" name="update_mo_ta_chi_tiet" v-model="edit.mo_ta_chi_tiet" cols="30" rows="7" placeholder="Nhập vào mô tả chi tiết của sản phẩm"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button data-dismiss="modal" v-on:click="accept_update()" type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('js')
<script>
    new Vue({
        el : '#app',
        data : {
            add : {},

            arr : [],
            del : {},
            edit : {},

        },
        created(){
            this.get();
        },
        methods : {
            themMoi(){

            axios
                .post('/admin-lte/san-pham/create', this.add)
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
                 .get('/admin-lte/san-pham/data')
                 .then((res) => {
                    this.arr = res.data.list;
                 });
        },
        accept_delete(){
            axios
                .post('/admin-lte/san-pham/delete', this.del)
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
        status(v){
            axios
                .post('/admin-lte/san-pham/status', v)
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
        accept_update(){
                    axios
                        .post('/admin-lte/san-pham/update', this.edit)
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
    });
</script>
@endsection
