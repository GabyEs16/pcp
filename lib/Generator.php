<?php 
  //CLASE QUE GENERA ETIQUETAS HTML
	class TagsGenerator{
    //GENERA TABLAS
		public static function newTable($array, $header){
      $headers = "";
      $data = "";
      foreach ($header as $key => $value) {
        $headers .="<th>".$value."</th>";
      }
      $counter = 0;
      $rows = count($array);
      $cols = count($array[0]);
      for ($i=0; $i < $cols; $i++) {
        $data .= "<tr>";
        foreach ($array as $key => $value) {
          $data .= "<td>".$value[$counter]."</td>";
        }
        $data .= '
          <td align="center"><a href="#" class="btn btn-warning btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Editar</span>
                  </a></td>
        </tr>';
        $counter++;
      }
      
			$table = '
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      '.$headers.'
                    </tr>
                  </thead>
                  <tbody>
                  '.$data.'
                  </tbody>
                </table>
              </div>
            </div>
          </div>';
          return $table;
		}
    //GENERA FORMULARIOS
    public static function newForm($data){
      $formulario = "<form>";
      
      $formulario .="</form>";
      return $formulario;
    }
    //GENERA MODALES
    public static function newModal($id, $size, $title,$content, $pbutton, $sbutton){
      $modal = '
      <div class="modal fade bd-example-modal-'.$size.'" tabindex="-1" role="dialog"
           aria-labelledby="myHugeModalLabel" aria-hidden="true" id="'.$id.'">
        <div class="modal-dialog modal-'.$size.'">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">'.$title.'</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              '.$content.'
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">'.$pbutton.'</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">'.$sbutton.'</button>
            </div>
          </div>
        </div>
      </div>';
      return $modal;
    }
    //GENERA BOTONES
    public static function newButton($action, $color, $icon, $text){
      $button = '
        <a href="'.$action.'" class="btn btn-'.$color.' btn-icon">
          <span class="icon text-white-50">
            <i class="'.$icon.'"></i>
          </span>
          <span class="text">'.$text.'</span>
        </a>
      ';

      return $button;
    }
	}
 ?>