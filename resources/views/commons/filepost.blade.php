@extends("layouts.app")

@section("content")
 
            <div class="card">
                
                <div class="card-header">
                    <h4 class="card-title">最近の釣果</h4>
                </div>
                <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>魚種</th>
                                    <th>魚長</th>
                                    <th>釣果日時</th>
                                 　 <th>場所</th>
                                    <th>写真</th>
                                    <th>投稿削除</th>
                                </tr>
                            </thead>
                            @if (count($recordsTime) > 0)
                            <tbody>
                            @foreach($recordsTime as $record)
                                <tr>
                                    <td>{{ $record->content }}</td>
                                    <td> {{ $record->length }} cm </td>
                                    <td>{{ $record->updated_at }}</td>
                                    <td>場所</td>
                                    <td>
                                    @if ($record->fish_picture == null)    
                                        {!! Form::model($record, ["route" => ["fishPicture", "$record->id"], 'enctype'=>'multipart/form-data']) !!}
                                            {!! Form::file("fish_picture", ["files" => true, "class" => "form-control-file"]) !!}
                                            {!! Form::submit("アップロード", ["class" => "btn btn-primary btn-block"]) !!}
                                        {!! Form::close() !!}
                                        
                                        @else
                                         <img src="{{ asset('storage/fish_picture/'.$record->fish_picture) }}" width="150px" height="150px" alt="miss">
                                        
                                    @endif
                                    </td>
                                    <td>
                                        {!! Form::model($record, ['route' => ['destroy', "$record->id"], 'method' => 'delete']) !!}
                                            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach   
                            </tbody>
                        </table>
                    @endif 
                    {{ $recordsTime->links("pagination::bootstrap-4") }}
                </div>
            </div>
            
            
            <div class="card">
                
                <div class="card-header">
                    <h4 class="card-title">過去の大物</h4>
                </div>
                <div class="card-body">
                    
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>魚種</th>
                                    <th>魚長</th>
                                    <th>釣果日時</th>
                                 　 <th>場所</th>
                                    <th>写真</th>
                                    <th>投稿削除</th>
                                </tr>
                            </thead>
                            @if (count($recordsLength) > 0)
                            <tbody>
                            @foreach($recordsLength as $record) 
                                <tr>
                                    <td>{{ $record->content }}</td>
                                    <td> {{ $record->length }} cm </td>
                                    <td>{{ $record->updated_at }}</td>
                                    <td>場所</td>
                                    <td>
                                    @if ($record->fish_picture == null)    
                                        {!! Form::model($record, ["route" => ["fishPicture", "$record->id"], 'enctype'=>'multipart/form-data']) !!}
                                            {!! Form::file("fish_picture", ["files" => true, "class" => "form-control-file"]) !!}
                                            {!! Form::submit("アップロード", ["class" => "btn btn-primary btn-block"]) !!}
                                        {!! Form::close() !!}
                                        
                                        @else
                                         <img src="{{ asset('storage/fish_picture/'.$record->fish_picture) }}" width="150px" height="150px" alt="miss">
                                        
                                    @endif
                                    </td>
                                    <td>
                                 
                                    {!! Form::model($record, ['route' => ['destroy', "$record->id"], 'method' => 'delete']) !!}
                                        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach  
                            </tbody>
                        </table>
                    @endif
                    {{ $recordsLength->links("pagination::bootstrap-4") }}
                </div>
                
            </div>
            
            
@endsection