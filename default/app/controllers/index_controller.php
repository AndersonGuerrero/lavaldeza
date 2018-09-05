<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class IndexController extends AppController
{

    public function index()
    {
      $this->blogs = (new Blogs())->find(
        "limit: 3",
        "order: created_at desc"
      );
      $this->showSlider = true;
      $this->sliders = (new Sliders())->find();
      $this->amenidades = (new Amenidades());
      $this->seccionmas = (new Seccionmas())->find_by_first();
      $this->avances = (new Avances())->find();
      $this->quienessomos = (new Quienessomos())->find_by_first();
      $this->proyecto = (new Proyecto())->find_by_first();
    }

    public function blog($id){
      $titulo = str_replace('-',' ', $id);
      $this->blog = (new Blogs())->find_by_titulo($titulo);
      $this->blogs = (new Blogs())->find(
        "order: created_at desc",
        "conditions: id !=".$this->blog->id
      );
    }

    public function blogs(){
      $this->blogs = (new Blogs())->find(
        "order: created_at desc"
      );
    }
    
    public function contactSend(){
      $headers = '';
      $headers = 'MIME-Version: 1.0'.PHP_EOL;
      $headers .= 'Content-type: text/html; charset=utf-8'.PHP_EOL;
      $headers .= 'From: '.Input::post('mail').PHP_EOL;
      
      $message = sprintf(
        "
        Nombre: %s <br>
        Teléfono: %s <br>
        Interesado en: %s <br>
        Mensaje: %s",
        Input::post('name'),
        Input::post('telefono'),
        Input::post('intereses'),
        Input::post('comment')
        );
        $success = mail("info@grupoti.com", "Contacto", $message, $headers );
        // $success = mail("anderson.andres.guerrero@gmail.com", "Solicitud de Prestamo", $message, $headers );
        Flash::valid("Registro exitoso!");
        return Redirect::to("/");
    }

}
