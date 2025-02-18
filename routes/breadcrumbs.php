<?php

// Error 404
Breadcrumbs::for('errors.404', function ($trail) {
    $trail->push('Página no encontrada');
});

/**
 *  Colegio migajas de pan
 */

// Colegio > Index
Breadcrumbs::for('colegio-index', function ($trail) {
    $trail->push('Inicio', route('colegio-index'));
});

// Colegio > Admission
Breadcrumbs::for('colegio-admission', function ($trail, $modality) {
    $trail->parent('colegio-index');
    $trail->push('Matrícula alumno ' . ($modality), route('colegio-admission', $modality));
});

// Colegio > AboutUs
Breadcrumbs::for('colegio-aboutus', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Nosotros', route('colegio-aboutus'));
});

// Colegio > Contact
Breadcrumbs::for('colegio-contact', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Contáctenos', route('colegio-contact'));
});

// Colegio > FrequentQuestions
Breadcrumbs::for('colegio-frequentquestions', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Preguntas Frecuentes', route('colegio-frequentquestions'));
});

// Colegio > PaymentGuide
Breadcrumbs::for('colegio-paymentguide', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Guía de pagos en línea', route('colegio-paymentguide'));
});


// Colegio > Blog
Breadcrumbs::for('colegio-blog', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Blog', route('colegio-blog'));
});

// Colegio > Blog > Post
Breadcrumbs::for('colegio-blogpost', function ($trail, $post) {
    $trail->parent('colegio-blog');
    $trail->push($post, route('colegio-blogpost', $post));
});

// Colegio > EducationalProposal
Breadcrumbs::for('colegio-educationalproposal', function ($trail) {
    $trail->push('Propuesta educativa', route('colegio-educationalproposal'));
});

// Colegio > Venue
Breadcrumbs::for('colegio-venue', function ($trail, $venue) {
    $trail->parent('colegio-index');
    $trail->push('Sede ' . ucwords($venue), route('colegio-venue', $venue));
});

// Colegio > Contact
Breadcrumbs::for('colegio-vacations', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Vacaciones Útiles', route('colegio-vacations'));
});

// Colegio > Venue > Vacations
Breadcrumbs::for('colegio-vacations-venue', function ($trail, $venue, $venueSlug) {
    $trail->parent('colegio-index');
    $trail->push('Sede ' . $venue, route('colegio-venue', $venueSlug));
    $trail->push('Vacaciones Útiles', route('colegio-vacations-venue', $venue));
});

Breadcrumbs::for('menu', function ($trail) {
    $trail->push('Menu', route('menu'));
 });

/**
 *  Academia migajas de pan
 */

// Academia > Index
Breadcrumbs::for('academia-index', function ($trail) {
   $trail->push('Inicio', route('academia-index'));
});

// Academia > AboutUs
Breadcrumbs::for('academia-aboutus', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Nosotros', route('academia-aboutus'));
});

// Academia > Simulacros
Breadcrumbs::for('academia-simulacros', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Simulacros', route('academia-simulacros'));
});

// Academia > Solucionarios
Breadcrumbs::for('academia-solucionarios', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Solucionarios', route('academia-solucionarios'));
});

// Academia > Tutorials
Breadcrumbs::for('academia-tutorials', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Tutoriales', route('academia-tutorials'));
});

// Academia > Ciclo Escolar
Breadcrumbs::for('academia-schoolcycle', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Escolar', route('academia-schoolcycle'));
});

// Academia > Guía de pagos
Breadcrumbs::for('academia-paymentguide', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Guia', route('academia-paymentguide'));
});

// Academia > Preparation
Breadcrumbs::for('academia-preparation', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Preparación ' . $modality, route('academia-preparation', $modality));
});

// Academia > Preparation New
Breadcrumbs::for('academia-preparation2', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Preparación ' . $modality, route('academia-preparation2', $modality));
});

// Academia > Venues
Breadcrumbs::for('academia-venues', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Sedes', route('academia-venues'));
});

// Academia > Venue
Breadcrumbs::for('academia-venue', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Sede ' . ucwords($modality), route('academia-venue', $modality));
});

// Academia > Studentship > Exam
Breadcrumbs::for('academia-studentship-exam', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Becas ' . ucwords($modality), route('academia-studentship-exam', [$modality, 'xx']));
});

// Academia > Simulacrum > Exam
Breadcrumbs::for('academia-simulacrum-exam', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Simulacro ' . ucwords($modality), route('academia-simulacrum-exam', [$modality, 'xx']));
});

// Academia > Simulacrum
Breadcrumbs::for('academia-simulacrum', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Simulacro ' . ucwords($modality), route('academia-simulacrum', $modality));
});

// Academia > Solutions
Breadcrumbs::for('academia-solutions', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Solucionarios ' . ucwords($modality), route('academia-solutions', $modality));
});

// Academia > Enrollment
Breadcrumbs::for('academia-enrollment', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Preinscripción en línea', route('academia-enrollment'));
});

// Academia > Math Olympics
Breadcrumbs::for('academia-matholympics', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Olimpiadas de Matemáticas', route('academia-matholympics'));
});

// Academia > Contact
Breadcrumbs::for('academia-contact', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Contáctenos', route('academia-contact'));
});

// Academia > Blog
Breadcrumbs::for('academia-blog', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Blog', route('academia-blog'));
});

// Academia > Blog > Post
Breadcrumbs::for('academia-blogpost', function ($trail, $post) {
    $trail->parent('academia-blog');
    $trail->push($post, route('academia-blogpost', $post));
});

// Academia > What you option
Breadcrumbs::for('academia-what-your-option', function ($trail) {
   $trail->push('Página en construcción', route('academia-what-your-option'));
});

// Academia > Multimedia
Breadcrumbs::for('academia-multimedia', function ($trail) {
   $trail->push('Página en construccion', route('academia-multimedia'));
});

// Academia > Your best option
Breadcrumbs::for('academia-your-best-option', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('¿Por qué somos tu mejor opción?', route('academia-your-best-option'));
});

// Colegio > FrequentQuestions
Breadcrumbs::for('academia-frequentquestions', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Preguntas Frecuentes', route('academia-frequentquestions'));
});
