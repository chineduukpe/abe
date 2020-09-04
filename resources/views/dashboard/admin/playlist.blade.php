@extends('layouts.user-dashboard')
@section('admin-dashboard-content')
    <div class="row py-4">
        <div class="col-md-4">
            <h6 class="theme-color">Add New Playlist <i class="fa fa-list"></i></h6>
            <form action="{{route('admin.playlist.create')}}" method="post" enctype="multipart/form-data" id="createPlaylistForm">
                {{csrf_field()}}
                <div class="form-group custom-form-group">
                    <label for="playlist" class="form-label">Playlist Title</label>
                    <input type="text" name="playlist" class="form-control" required>
                </div>
                <div class="form-group custom-form-group">
                    <label for="playlist_description" class="form-label">Playlist Description</label>
                    <textarea name="playlist_descripton" required cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="custom-form-group form-group">
                    <label for="topic" class="form-label">Category</label>
                    <select name="category" id="" class="form-control selectpicker"  required>
                        @foreach($shared_categories as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-form-group form-group">
                    <div class="file-form-group">
                        <input type="file" name="playlist_cover_image"  required>
                        <label for="playlist_cover_image" class="form-label d-block">Playlist Cover Image</label>
                        <button class="file-upload-button btn btn-theme">Upload</button>
                        <span class="upload-file-name"></span>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-theme">Create Playlist</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <h6 class="theme-color underlined">Available Playlists</h6>
            <table class="table table-lg table-responsive-sm table-light slid-data-table bb-theme">
                @if($playlists->count())
                <thead>
                <tr>
                    <th>Playlist Title</th>
                    <th>Videos</th>
                    <th>Owner</th>
                    <th>Creation Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($playlists as $playlist)
                    <tr class="bb-muted">
                        <td><a href="{{route('admin.playlist.edit',$playlist->id)}}">{{$playlist->playlist}}</a></td>
                        <td>19</td>
                        <td>Chinedu Ukpe</td>
                        <td>24th July 2020</td>
                    </tr>
                    @endforeach
                    @else
                    <p class="text-muted">You have not created any playlists yet.</p>
                @endif

                </tbody>
            </table>
        </div>
    </div>
    @endsection

@section('dashboard-title')
Playlists
@endsection