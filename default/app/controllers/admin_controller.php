<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class AdminController extends AdmincustomController
{

    public function index()
    {
      if(!Auth::is_valid()){
        return Redirect::to('admin/login');
      }
      $this->blogs = (new Blogs())->find();
    }

    public function logout(){
      Auth::destroy_identity();
      // Auth::destroy_active_session();
      return Redirect::to('admin/login');
    }

    public function login()
    {
      if(Auth::is_valid()){
        return Redirect::to('admin');
      }
      View::template('login');
      if(Input::hasPost('usuarios')){
        $pwd = Input::post('usuarios.clave');
        $username = Input::post('usuarios.usuario');
        $auth = new Auth("model", "class: usuarios", "usuario: $username", "clave: $pwd");
        if ($auth->authenticate()) {
          return Redirect::to("admin");
        }else{
          Flash::error('Usuario o contraseña incorrecta!');
        }
      }
    }

    public function eliminar_blog($id){
      if(!Auth::is_valid()){
        return Redirect::to('admin/login');
      }
      if ((new Blogs)->delete((int) $id)) {
              Flash::valid('Operación exitosa');
      } else {
              Flash::error('Falló Operación');
      }
      return Redirect::to("admin/");
    }

    public function nuevo_blog()
    {
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if(Input::hasPost('blogs')){
        $this->blogs = (new Blogs(Input::post('blogs')));
        if ($this->blogs->save()) {
          if($_FILES){
            $target_path = FILES_PATH.'upload/blog/'.$this->blogs->id.'/';
            if (!file_exists($target_path)) {
              mkdir($target_path, 0755, true);
            }
            $target_path = $target_path.basename($_FILES['imagen_selected']['name']);
            $target_path2 = $target_path.basename($_FILES['imagen_selected2']['name']);
            move_uploaded_file($_FILES['imagen_selected']['tmp_name'], $target_path);
            move_uploaded_file($_FILES['imagen_selected2']['tmp_name'], $target_path2);
            $this->blogs->img_inicio = $_FILES['imagen_selected']['name'];
            $this->blogs->img_noticia = $_FILES['imagen_selected2']['name'];
            $this->blogs->save();
          }
          Flash::valid("Blog Registrado");
          return Redirect::to("admin/");
        }
      }
    }

    public function planes(){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if(Input::hasPost('planes')){
        $this->planes = (new Planes(Input::post('planes')));
        if ($this->planes->save()) {
          Flash::valid("Actualizado");
          return Redirect::to("admin/planes/");
        }else{
          Flash::valid("Error al Actualizar");
        }
      }
      $this->planes = (new Planes())->find_by_first();
    }

    public function contacto(){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if(Input::hasPost('contacto')){
        $this->contacto = (new Contacto(Input::post('contacto')));
        if ($this->contacto->save()) {
          Flash::valid("Actualizado");
          return Redirect::to("admin/contacto/");
        }else{
          Flash::valid("Error al Actualizar");
        }
      }
      $this->contacto = (new Contacto())->find_by_first();
    }

  
    public function seccion_mas(){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }

      if($_FILES){
        $this->seccionmas = (new Seccionmas(Input::post('seccionmas')));
        $target_path = FILES_PATH.'upload/seccion-mas/';
        $target_path1 = $target_path.basename($_FILES['img_popup_1']['name']);
        $target_path2 = $target_path.basename($_FILES['img_popup_2']['name']);
        $target_path3 = $target_path.basename($_FILES['img_popup_3']['name']);
        $target_path4 = $target_path.basename($_FILES['img_popup_4']['name']);
        if(
          move_uploaded_file($_FILES['img_popup_1']['tmp_name'], $target_path1) and
          move_uploaded_file($_FILES['img_popup_2']['tmp_name'], $target_path2) and
          move_uploaded_file($_FILES['img_popup_3']['tmp_name'], $target_path3) and
          move_uploaded_file($_FILES['img_popup_4']['tmp_name'], $target_path4)
        ){
          $this->seccionmas->img_popup_1 = $_FILES['img_popup_1']['name'];
          $this->seccionmas->img_popup_2 = $_FILES['img_popup_2']['name'];
          $this->seccionmas->img_popup_3 = $_FILES['img_popup_3']['name'];
          $this->seccionmas->img_popup_4 = $_FILES['img_popup_4']['name'];
        }
        if ($this->seccionmas->save()) {
          Flash::valid("Actualizado");
          return Redirect::to("admin/seccion_mas/");
        }else{
          Flash::valid("Error al Actualizar");
        }
      }else{
        $this->seccionmas = (new Seccionmas())->find_by_first();
      }
    }

    public function videos(){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      $this->videos = (new Videos())->find();
    }

    public function agregar_video(){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if(Input::hasPost('video')){
        $this->video = (new Videos(Input::post('video')));
        if($_FILES){
          $target_path = FILES_PATH.'upload/videos/';
          $target_path = $target_path.basename($_FILES['imagen_selected']['name']);
          if(
            move_uploaded_file($_FILES['imagen_selected']['tmp_name'], $target_path)
          ){
            $this->video->imagen = $_FILES['imagen_selected']['name'];
          }
        }
        if ($this->video->save()) {
          Flash::valid("Registrado");
          return Redirect::to("admin/videos/");
        }else{
          Flash::valid("Error al Actualizar");
        }
      }
    }

    public function editar_video($id){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if(Input::hasPost('video')){
        $this->video = (new Videos(Input::post('video')));
        if($_FILES){
          $target_path = FILES_PATH.'upload/videos/';
          $target_path = $target_path.basename($_FILES['imagen_selected']['name']);
          if(
            move_uploaded_file($_FILES['imagen_selected']['tmp_name'], $target_path)
          ){
            $this->video->imagen = $_FILES['imagen_selected']['name'];
          }
        }
        if ($this->video->update()) {
          Flash::valid("Actualizado");
          return Redirect::to("admin/videos/");
        }else{
          Flash::valid("Error al Actualizar");
        }
      }
      $this->video = (new Videos())->find_by_id((int)$id);
    }

    public function el_proyecto(){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if(Input::hasPost('proyecto')){
        $this->proyecto = (new Proyecto(Input::post('proyecto')));
        if($_FILES){
          $target_path = FILES_PATH.'upload/project/';
          $target_path = $target_path.basename($_FILES['imagen_selected']['name']);
          if(
            move_uploaded_file($_FILES['imagen_selected']['tmp_name'], $target_path)
          ){
            $this->proyecto->imagen = $_FILES['imagen_selected']['name'];
          }
        }
        if ($this->proyecto->save()) {
          Flash::valid("Actualizado");
          return Redirect::to("admin/el_proyecto/");
        }else{
          Flash::valid("Error al Actualizar");
        }
      }
      $this->proyecto = (new Proyecto())->find_by_first();
    }

    public function quienes_somos(){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if(Input::hasPost('quienessomos')){
        $this->quienessomos = (new Quienessomos(Input::post('quienessomos')));
        if ($this->quienessomos->save()) {
          Flash::valid("Actualizado");
          return Redirect::to("admin/quienes_somos/");
        }else{
          Flash::valid("Error al Actualizar");
        }
      }
      $this->quienessomos = (new Quienessomos())->find_by_first();
    }

    public function editar_blog($id)
    {
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if(Input::hasPost('blogs')){
        $this->blogs = (new Blogs(Input::post('blogs')));
        if($_FILES){
          $target_path = FILES_PATH.'upload/blogs/';
          $target_path = $target_path.basename($_FILES['imagen_selected']['name']);
          $target_path2 = $target_path.basename($_FILES['imagen_selected2']['name']);
          if(
            move_uploaded_file($_FILES['imagen_selected']['tmp_name'], $target_path) and
            move_uploaded_file($_FILES['imagen_selected2']['tmp_name'], $target_path2)
          ){
            $this->blogs->img_inicio = $_FILES['imagen_selected']['name'];
            $this->blogs->img_noticia = $_FILES['imagen_selected2']['name'];
          }
        }
        if ($this->blogs->update()) {
          Flash::valid("Blog actualizado!");
          return Redirect::to("admin/");
        }
      }else{
        $this->blogs = (new Blogs())->find_by_id((int)$id);
      }
    }

    public function sliders(){
      $this->sliders = (new Sliders())->find();
    }

    public function nuevo_slider(){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if($_FILES){
        $this->sliders = (new Sliders(Input::post('sliders')));
        $target_path = FILES_PATH.'upload/slider/';
        $target_path = $target_path.basename($_FILES['imagen']['name']);
        if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)){
          $this->sliders->imagen = $_FILES['imagen']['name'];
        }
        if ($this->sliders->save()) {
          Flash::valid("Slider Registrado");
          return Redirect::to("admin/sliders/");
        }else{
          Flash::error("Error al registrar el slider");
          return Redirect::to("admin/sliders/");
        }
      }
    }

    public function editar_slider($id){
      if(!Auth::is_valid()){
        return Redirect::to('admin');
      }
      if($_FILES){
        $this->sliders = (new Sliders(Input::post('sliders')));
        $target_path = FILES_PATH.'upload/slider/';
        $target_path = $target_path.basename($_FILES['imagen_selected']['name']);
        if(move_uploaded_file($_FILES['imagen_selected']['tmp_name'], $target_path)){
          $this->sliders->imagen = $_FILES['imagen_selected']['name'];
        if ($this->sliders->update()) {
          Flash::valid("Slider actualizado!");
          return Redirect::to("admin/sliders/");
          }
        }
      }else{
        $this->sliders = (new Sliders())->find_by_id((int)$id);
      }
      
    }


    public function avances(){
      $this->avances = (new Avances())->find();
    }

    public function agregar_avance(){
        if($_FILES){
          $this->avances = (new Avances(Input::post('avances')));
          $target_path = FILES_PATH.'upload/avance-obras/';
          $target_path = $target_path.basename($_FILES['imagen_selected']['name']);
          if(move_uploaded_file($_FILES['imagen_selected']['tmp_name'], $target_path)){
            $this->avances->imagen = $_FILES['imagen_selected']['name'];
          }
          if ($this->avances->save()) {
            Flash::valid("Avance Registrado");
            return Redirect::to("admin/avances/");
          }
        }
    }

    public function eliminar_avance($id){
      (new Avances())->delete((int)$id);
      Flash::valid("Avance eliminado!");
      return Redirect::to("admin/avances");
    }

    
    public function amenidades(){
      $this->amenidades = (new Amenidades())->find();
    }

    public function agregar_amenidad(){
      if(Input::hasPost('amenidades')){
        $this->amenidades = (new Amenidades(Input::post('amenidades')));
        if($_FILES){
          $target_path = FILES_PATH.'upload/amenidades/'.str_replace(' ', '-', Input::post('amenidades.categoria')).'/';
          $target_path = $target_path.basename($_FILES['imagen_selected']['name']);
          if(move_uploaded_file($_FILES['imagen_selected']['tmp_name'], $target_path)){
            $this->amenidades->imagen = $_FILES['imagen_selected']['name'];
          }
        }
        if ($this->amenidades->save()) {
          Flash::valid("Amenidad Registrada");
          return Redirect::to("admin/amenidades/");
        }
      }
    }

    public function editar_foto($id){
      $this->galeria = (new Galeria())->find_by_id((int)$id);
    }

    public function eliminar_amenidad($id){
      (new Amenidades())->delete((int)$id);
      Flash::valid("Amenidad eliminada!");
      return Redirect::to("admin/amenidades");
    }

    public function eliminar_slider($id){
      (new Sliders())->delete((int)$id);
      Flash::valid("Slider eliminada!");
      return Redirect::to("admin/sliders/");
    }
}
