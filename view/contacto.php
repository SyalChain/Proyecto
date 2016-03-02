{% extends "layout.php" %}

{% block tabActivo %}crear{% endblock tabActivo %}

{% block cuerpo %}

<h1>Formulario</h1>
    <form method="post" action="/guardar">
        <fieldset>
            <legend>Texto del dictado</legend>
            <textarea style="width:10%" rows="1" cols="50" name="nombre">Nombre</textarea>
            <textarea style="width:10%" rows="1" cols="50" name="Apellidos">Apellidos</textarea>
            <br>
            Email: <input type="text" name="email" value="ejemplo@gmail.com"><br>
        Usuario: <input type="type"="text" name="email" value=><br>
        Contraseña: <input type="password"="text" name="email" value=><br>
            <input type="submit" value="crear cuenta"  class="btn"><br>
           
        </fieldset>
    </form>
{% endblock cuerpo %}
