/**
 * Created by Fernanda on 17-10-2016.
 */

var FacultadesyCarreras = {

    "facultades": [{
        "facultad": "Escuela de Arquitectura",
        "carrera": ["Arquitectura"]
    },
        {
            "facultad": "Facultad de Administración y Economía",
            "carrera": ["Administración Pública", "Contador Público y Auditor", "Ingeniería Comercial"]
        },
        {
            "facultad": "Facultad de Ciencia",
            "carrera": ["Ingeniería Estadística", "Ingeniería Física", "Ingeniería Matemática", "Licenciatura en Ciencias de la Computación", "Pedagogía en Física y Matemática / Licenciatura en Educación en Física y Matemática", "Pedagogía en Matemática y Computación / Licenciatura en Educación en Matemática y Computación"]
        },
        {
            "facultad": "Facultad de Ciencias Médicas",
            "carrera": ["Enfermería", "Kinesiología", "Licenciatura en Ciencias de la Actividad Física / Terapeuta en Actividad Física", "Licenciatura en Ciencias de la Actividad Física /Entrenador Deportivo", "Medicina", "Obstetricia y Puericultura", "Pedagogía en Educación Física / Licenciatura en Ciencias de la Actividad Física", "Terapia Ocupacional"]
        },
        {
            "facultad": "Facultad de Derecho",
            "carrera": ["Derecho"]
        },
        {
            "facultad": "Facultad de Humanidades",
            "carrera": ["Licenciatura en Estudios Internacionales", "Licenciatura en Historia", "Licenciatura en Lingüística Aplicada a la Traducción en Inglés - Japonés e Inglés - Portugués", "Pedagogía en Castellano / Licenciatura en Educación en Castellano", "Pedagogía en Educación General Básica / Licenciatura en Educación General Básica", "Pedagogía en Filosofía / Licenciatura en Educación en Filosofía", "Pedagogía en Historia y Ciencias Sociales / Licenciatura en Educación en Historia y Ciencias Sociales", "Pedagogía en Inglés / Licenciatura en Educación en Inglés", "Periodismo", "Psicología"]
        },
        {
            "facultad": "Facultad de Ingeniería",
            "carrera": ["Ingeniería Ambiental", "Ingeniería Civil en Electricidad ", "Ingeniería Civil en Geografía", "Ingeniería Civil en Industria",  "Ingeniería Civil en Informática", "Ingeniería Civil en Mecánica", "Ingeniería Civil en Metalurgia", "Ingeniería Civil en Minas", "Ingeniería Civil en Obras Civiles", "Ingeniería Civil en Química", " 	Ingeniería de Ejecución en Climatización (Calefacción, Refrigeración, Ventilación y Aire Acondicionado)", "Ingeniería de Ejecución en Computación e Informática","Ingeniería de Ejecución en Electricidad","Ingeniería de Ejecución en Geomensura", "Ingeniería de Ejecución en Industria", "Ingeniería de Ejecución en Mecánica", "Ingeniería de Ejecución en Metalurgia", "Ingeniería de Ejecución en Minas","Ingeniería de Ejecución en Química", " 	Ingeniería en Biotecnología"]
        },
        {
            "facultad": "Facultad de Química y Biología",
            "carrera": ["Bioquímica y Licenciatura en Bioquímica","Pedagogía en Química y Biología / Licenciatura en Eduación en Química y Biología","Química y Farmacia", "Química y Licenciatura en Química", "Técnico Universitario en Análisis Químico y Físico"]
        },
        {
            "facultad": "Facultad Tecnológica",
            "carrera": ["Ingeniería de Alimentos", "Ingeniería en Agronegocios", "Publicidad", " 	Tecnólogo en Administración de Personal", "Tecnólogo en Alimentos", "Tecnólogo en Automatización Industrial", "Tecnólogo en Construcciones", "Tecnólogo en Control Industrial", "Tecnólogo en Diseño Industrial", "Tecnólogo en Mantenimiento Industrial", "Tecnólogo en Telecomunicaciones"]
        },
        {
            "facultad": "Programa de Bachillerato",
            "carrera": ["Bachillerato en Ciencias y Humanidades"]
        }]
}


jQuery(document).ready(function () {

    var iFacultad = 0;
    var htmlFacultad = '<option value="sin-Facultad">Seleccione Facultad</option><option value="sin-facultad">--</option>';
    var htmlCarrera = '<option value="sin-Facultad">Seleccione carrera</option><option value="sin-facultad">--</option>';

    jQuery.each(FacultadesyCarreras.facultad, function () {
        htmlFacultad = htmlFacultad + '<option value="' + FacultadesyCarreras.facultades[iFacultad].facultad + '">' + FacultadesyCarreras.facultades[iFacultad].facultad + '</option>';
        iFacultad++;
    });

    jQuery('#facultades').html(htmlFacultad);
    jQuery('#carreras').html(htmlCarrera);

    jQuery('#facultades').change(function () {
        var iFacultad = 0;
        var valorFacultad = jQuery(this).val();
        var htmlCarrera = '<option value="sin-carrera">Seleccione carrera</option><option value="sin-carrera">--</option>';
        jQuery.each(FacultadesyCarreras.facultades, function () {
            if (FacultadesyCarreras.facultades[iFacultad].facultad == valorFacultad) {
                var iCarrera = 0;
                jQuery.each(FacultadesyCarreras.facultades[iCarrera].carrera, function () {
                    htmlCarrera = htmlCarrera + '<option value="' + FacultadesyCarreras.facultades[iFacultad].carrera[iCarrera] + '">' + FacultadesyCarreras.facultades[iFacultad].carrera[iCarrera] + '</option>';
                    iCarrera++;
                });
            }
            iFacultad++;
        });
        jQuery('#carreras').html(htmlCarrera);
    });
    jQuery('#carreras').change(function () {
        if (jQuery(this).val() == 'sin-carrera') {
            alert('selecciones Facultad');
        } else if (jQuery(this).val() == 'sin-carrera') {
            alert('selecciones Carrera');
        }
    });
    jQuery('#facultades').change(function () {
        if (jQuery(this).val() == 'sin-facultad') {
            alert('selecciones Facultad');
        }
    });

});
