<?php

namespace BusinessProject;

function user()
{
    return __NAMESPACE__ . ' => Edgaras';
}

// end namespace BuisnessProject

namespace WeddingProject;

function user()
{
    return __NAMESPACE__ . ' => Testas';
}

// end namespace WeddingProject

namespace EducationProject;

function user()
{
    return __NAMESPACE__ . ' => Kiril';
}

var_dump(user());
var_dump(\BusinessProject\user());
var_dump(\WeddingProject\user());