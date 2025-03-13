<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
// home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});

// Pengajuan
// home -> pengajuan
Breadcrumbs::for('pengajuan', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard'); // Pengajuan berasal dari Dashboard
    $trail->push('Pengajuan', route('pengajuan'));
});

// Pengajuan Baru
// home -> pengajuan -> pengajuan baru
Breadcrumbs::for('pengajuan.baru', function (BreadcrumbTrail $trail) {
    $trail->parent('pengajuan'); // Harus merujuk ke 'pengajuan'
    $trail->push('Buat Baru', route('pengajuan.baru'));
});

// Approval
// home -> approval
Breadcrumbs::for('approval', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard'); // Pengajuan berasal dari Dashboard
    $trail->push('Approval', route('approval'));
});
