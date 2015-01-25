@section('content')

  <style>
    #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
    #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>

  <script type="text/javascript">
    $(function() {
      $("#sort tbody").sortable({
        helper: fixHelperModified,
        stop: updateIndex
      }).disableSelection();

    });
    //http://stackoverflow.com/questions/13204871/jquery-sortable-keep-within-container-boundary
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
        $helper.children().each(function(index) {
          $(this).width($originals.eq(index).width())
        });
        //alert();
        return $helper;
      },
      updateIndex = function(e, ui) {
        $('td.index', ui.item.parent()).each(function (i) {
          var t = $(this).find("input[type='text']").val(i + 1);
          $(t).val(i + 1);
        });

      };
  </script>

  {{ Form::open(['url'=> 'admin/post/order', 'id'=>'val', 'class'=>'form', 'role'=>'form']) }}
    <br>
    <input type="submit" class="btn btn-primary" value="Save Order">
    <br><br>

    <table class='table table-bordered' id="sort">
      <thead>
      <tr>
        <th width="10%">Position</th>
        <th width="20%">Image</th>
        <th>Title</th>
      </tr>
      </thead>
      <tbody>
      @foreach($posts as $p)
        <tr>
          <td class="index"><input type="text" name='pos{{$p->id}}' value="{{$p->pos}}"></td>
          <td>{{HTML::image('img/blog/'.$p->image, null, ['height'=>'100px', 'style'=>'width:auto'])}}</td>
          <td>{{link_to('admin/post/update/'.$p->id, $p->title)}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </form>
@stop