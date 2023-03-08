@extends('admin_lte.shares.master_lte')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản Lý Loại Sản Phẩm </h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content" id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            Thêm Mới Loại Sản Phẩm
                        </div>
                        <form >
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên Loại Sản Phẩm</label>
                                    <input v-on:keyup="aaa()" v-model="add.ten_loai_san_pham" type="text" class="form-control"
                                        placeholder="Nhập vào tên loại sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label>Slug Loại Sản Phẩm</label>
                                    <input  v-model="slug_loai_san_pham" type="text" class="form-control"
                                        placeholder="Nhập vào slug loại sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label>Tình Trạng</label>
                                    <select  v-model="add.is_open" class="form-control">
                                        <option value="1">Hiển Thị</option>
                                        <option value="0">Tạm Tắt</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Chọn Loại Sản Phẩm Cha</label>
                                    <select  v-model="add.id_loai_san_pham_cha" class="form-control">
                                        @foreach ($loaiSanPham as $key => $value)
                                            <option value="{{ $value->id }}">{{ $value->ten_loai_san_pham }}</option>
                                        @endforeach

                                        <option value="0">Root</option>

                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button v-on:click="themMoi()" type="button" class="btn btn-primary">Thêm Mới</button>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            Danh Sách loại sản phẩm
                        </div>
                        <div class="card-body">
                            <table  class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">#</th>
                                        <th class="text-center" scope="col">Tên Menu</th>
                                        <th class="text-center" scope="col">Tình Trạng</th>
                                        <th class="text-center" scope="col">Menu Cha</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(v , k) in arr">
                                        <tr>
                                            <td class="text-center align-middle">@{{k +1}}</td>
                                            <th class="text-center" scope="col">@{{v.ten_loai_san_pham}}</th>
                                            <th class="text-center align-middle" scope="col">
                                               <button class="btn btn-primary" v-if="v.is_open ==1">Hiển thị</button>
                                               <button class="btn btn-info"v-else>Tạm tắt</button>
                                            </th>
                                            <td v-if="(v.TEN_LOAI_CHA)" class="text-center aglign-middle">@{{v.TEN_LOAI_CHA}}</td>
                                            <td v-else class="text-center aglign-middle">Root</td>
                                            <td class="text-center text-nowrap">
                                                <button v-on:click="edit = v" class="btn btn-info" data-toggle="modal" data-target="#updateModal">Cập nhật</button>
                                                <button v-on:click="del = v" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xoá</button>
                                            </td>
                                        </tr>
                                    </template>

                                </tbody>
                                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Bạn Có Chắc Chắn Muốn Xoá </h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" class="form-control" id="delete_id_loai_san_pham">
                                            Bạn có chắc chắn muốn xóa loại sản phẩm này!.
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button v-on:click="accept_delete()" type="button" class="btn btn-primary" data-dismiss="modal">Chắc Chắn</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Bạn Có Chắc Chắn Muốn Cập Nhật </h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <input v-model="edit.id" type="hidden" class="form-control" placeholder="Nhập vào tên loại sản phẩm">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Tên Loại Sản Phẩm</label>
                                                        <input v-model="edit.ten_loai_san_pham" type="text" class="form-control"
                                                            placeholder="Nhập vào tên loại sản phẩm">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Slug Loại Sản Phẩm</label>
                                                        <input v-model="edit.slug_loai_san_pham" type="text" class="form-control"
                                                            placeholder="Nhập vào slug loại sản phẩm">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tình Trạng</label>
                                                        <select v-model="edit.is_open" class="form-control">
                                                            <option value="1">Hiển Thị</option>
                                                            <option value="0">Tạm Tắt</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Chọn Loại Sản Phẩm Cha</label>
                                                        <select v-model="edit.id_loai_san_pham_cha" class="form-control">
                                                            @foreach ($loaiSanPham as $key => $value)
                                                                <option value="{{ $value->id }}">{{ $value->ten_loai_san_pham }}</option>
                                                            @endforeach
                                                            <option value="0">Root</option>

                                                        </select>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button v-on:click="accept_update()" type="button" class="btn btn-primary" data-dismiss="modal">Chắc Chắn cập nhật</button>
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
            add : {
                is_open : 1,
            },
            arr : [],
            del : {},
            edit : {},
            slug_loai_san_pham : '',
        },
        created(){
        this.get();
         },
        methods : {
        themMoi(){
            this.add.slug_loai_san_pham              = this.slug_loai_san_pham;
            axios
                .post('/admin-lte/loai-san-pham/create', this.add)
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
                 .get('/admin-lte/loai-san-pham/data')
                 .then((res) => {
                    this.arr = res.data.list;
                 });
        },
        accept_delete(){
            axios
                .post('/admin-lte/loai-san-pham/delete', this.del)
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
                        .post('/admin-lte/loai-san-pham/update', this.edit)
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
             toSlug(str) {
                str = str.toLowerCase();
                str = str
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '');
                str = str.replace(/[đĐ]/g, 'd');
                str = str.replace(/([^0-9a-z-\s])/g, '');
                str = str.replace(/(\s+)/g, '-');
                str = str.replace(/-+/g, '-');
                str = str.replace(/^-+|-+$/g, '');

                return str;
            },
            aaa() {
                var ten_loai = this.add.ten_loai_san_pham;
                var slug    = this.toSlug(ten_loai);
                this.slug_loai_san_pham = slug;
            },


        }
      })

    </script>
@endsection
