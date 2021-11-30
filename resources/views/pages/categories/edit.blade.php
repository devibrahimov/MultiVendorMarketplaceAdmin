@extends('welcome')

@section('css')

@endsection


@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Kategoriya </h2>
        </div>
        <!-- Input -->
        @include('partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            Kateqoriyalar
                            <small>Sayt Kateqoriyalarının Tənzimləmələri</small>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class=" col-lg-4 col-md-4  col-sm-12">
                                <form action="{{route('category.update', $category)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card">

                                        <div class="body table-responsive">
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <label class="card-inside-title">Kateqoriya adı</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" value="{{$category->name}}" name="name"  maxlength="25"  placeholder=" " />
                                                        </div>
                                                        @error('name')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="card-inside-title">Parent Kategoriya </label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <select name="parent_id" class="ms form-control" id="exampleFormControlSelect1">
                                                            <option value="">Select</option>
                                                            @foreach($parentCategories as $_category)
                                                                <option  @if($_category->id == $category->parent_id) selected @endif value="{{$_category->getAttribute('id')}}">{{$_category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('description')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <label class="card-inside-title">Kateqoriya Açıqlama Mətni</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" value="{{$category->description}}" name="description" maxlength="50" placeholder="" />
                                                        </div>
                                                        @error('description')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" @if($category->status == 1) checked  @endif name="status" type="checkbox"  id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                        STATUS
                                                    </label>
                                                </div>
                                                </div>
                                                @if(!isset($parentid))
                                                    <div class="col-sm-6">
                                                        <label class="card-inside-title">Icon</label>
                                                        <img src="{{$category->image}}" width="100px" alt="">                                                        <span> File type: image| width:100px ,height:100px</span>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" class="form-control" name="icon"   placeholder="col-sm-3" />
                                                            </div>
                                                            @error('icon')
                                                            <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="card-inside-title">Fon Şəkili</label>
                                                        <span> File type: image| width:470px ,height:501px</span>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" class="form-control" name="image"  placeholder="col-sm-3" />
                                                            </div>
                                                            @error('image')
                                                            <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <button type="submit"  class="btn btn-success waves-effect">
                                                <i class="material-icons " style="color:white">update</i>
{{--                                                <span>EDIT</span>--}}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- #END# Input -->

    </div>


@endsection

@section('js-libs')

@endsection

@section('js-script')

@endsection
