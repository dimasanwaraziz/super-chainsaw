<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use App\Models\Pengajuan; // Make sure to import the Pengajuan model

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
    $trail->parent('dashboard'); // Approval berasal dari Dashboard
    $trail->push('Approval', route('approval'));
});

// Detail Approval
// home -> approval -> detail of approval
Breadcrumbs::for('approval.show', function (BreadcrumbTrail $trail, $id) {
    $pengajuan = Pengajuan::findOrFail($id); // Query the Pengajuan model to get the name
    $trail->parent('approval'); // Detail Approval berasal dari Approval
    $trail->push($pengajuan->nomor_surat, route('approval.show', $id)); // Use the name from the query result
});