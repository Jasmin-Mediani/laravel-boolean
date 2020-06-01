@php 
$categories =  [
              [
                'id' => 1,
                'name' =>'Fantasy'
              ],
              [
                'id' => 2,
                'name' =>'Sci-fi'
              ],
              [
                'id' => 3,
                'name' =>'Gialli'
              ],
              [
                'id' => 4,
                'name' =>'Slice of life'
              ],
              [
                'id' => 5,
                'name' =>'Horror'
              ]
];

 $tags = [
          [
            'id' => 1,
            'name' => 'NomeTag1'
          ],
          [
            'id' => 2,
            'name' => 'NomeTag2'
          ],
          [
            'id' => 3,
            'name' => 'NomeTag3'
          ],
          [
            'id' => 4,
            'name' => 'NomeTag4'
          ],
          [
            'id' => 5,
            'name' => 'NomeTag5'
          ],
          [
            'id' => 6,
            'name' => 'NomeTag6'
          ],
          [
            'id' => 7,
            'name' => 'Nometag7'
          ],
          [
            'id' => 8,
            'name' => 'Nometag8'
          ],
          [
            'id' => 9,
            'name' => 'NomeTag9'
          ],
          [
            'id' => 10,
            'name' => 'Nometag10'
          ],
];

$photos = [
  [
    'id' => 1,
    'title' => 'Titolo Foto 1',
    'path' => 'images/nomefoto.png'
  ],
    [
      'id' => 2,
      'title' => 'Titolo Foto 2',
      'path' => 'images/nomefoto.png'
  ],
    [
      'id' => 3,
      'title' => 'Titolo Foto 3',
      'path' => 'images/nomefoto.png'
  ],
  [
      'id' => 4,
      'title' => 'Titolo Foto 4',
      'path' => 'images/nomefoto.png'
  ],
    [
      'id' => 5,
      'title' => 'Titolo Foto 5',
      'path' => 'images/nomefoto.png'
  ],
]
@endphp

@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-12">
           <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.pages.index')}}">Pages</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <h2>Inserisci una nuova pagina</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <form action="" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title"  placeholder="Inserisci un titolo">
                  @error('title')
                    <small class="form-text">Errore</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="summary">Summary</label>
                  <input type="text" class="form-control" id="summary"  placeholder="Inserisci il sommario">
                  @error('summary')
                    <small class="form-text">Errore</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select name="category" id="category" class="custom-select">
                    @foreach ($categories as $category)
                      <option value="{{$category['id']}}">{{$category['name']}}</option>
                    @endforeach
                   
                    {{-- <option value="2">Lorem</option>
                    <option value="3">Ipsum</option>
                    <option value="4">Dolor</option>
                    <option value="5">Sit</option> --}}
                  </select>
                  @error('category')
                    <small class="form-text">Errore</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea class="form-control" name="body" id="body" rows="10"></textarea>
                  @error('body')
                    <small class="form-text">Errore</small>
                  @enderror
                </div>
                <div class="form-group">
                  <fieldset>
                    <legend>Tags</legend>
                    @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">
                      <input class="form-check-input"  type="checkbox" name="tags[]" id="tag{{$tag['id']}}" value="{{$tag['id']}}">
                      <label class="form-check-label" for="tag{{$tag['id']}}">{{$tag['name']}}</label>
                  </div>
                  @endforeach
                  @error('tags')
                    <small class="form-text">Errore</small>
                  @enderror
                  </fieldset>
                </div>
                
               <div class="form-group">
                 <fieldset>
                     <legend>Photos</legend> 
                    @foreach ($photos as $photo)
                      <div class="form-check form-check-inline">
                        <input class="form-check-input"  type="checkbox" name="photos[]" id="photo{{$photo['id']}}" value="{{$photo['id']}}">
                        <label class="form-check-label" for="photo{{$photo['id']}}">{{$photo['title']}} 
                        <img src="{{$photo['path']}}" alt=""></label>
                    </div>
                    @endforeach
                    @error('photos')
                      <small class="form-text">Errore</small>
                    @enderror
                 </fieldset>
               
               </div>
                {{-- <div class="form-check">
                  <input class="form-check-input"  type="checkbox" name="tags[]" id="tag2" value="1">
                  <label class="form-check-label" for="tag1">Tags 2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input"  type="checkbox" name="tags[]" id="tag3" value="1">
                  <label class="form-check-label" for="tag3">Tags 3</label>
                </div> --}}
                <div class="form-group">
                  <input class="btn btn-primary" type="submit" value="Salva">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection