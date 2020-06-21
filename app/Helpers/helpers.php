<?php
use App\Library\GetFunction;


function is_frontend_user_logged_in()
{
  return GetFunction::frontend_user_logged_in();
}

function is_admin_user_logged_in()
{
  return GetFunction::admin_user_logged_in();
}

function get_image_url($image,$type)
{
  return GetFunction::create_image_url($image,$type);
}
function get_project_image_url_additional($image)
{
  return GetFunction::get_project_image_url_additional($image);
}
function get_file_image($image)
{
  return GetFunction::get_file_image($image);
}
function get_file_path($file,$type)
{
  return GetFunction::get_file_path($file,$type);
}
function get_project_status($status)
{
  return GetFunction::get_project_status($status);
}

function get_common_status($status)
{
  return GetFunction::get_common_status($status);
}

function get_documents_status($status)
{
  return GetFunction::get_documents_status($status);
}

function get_loggedin_user_details()
{
  return GetFunction::get_loggedin_user_details();
}

function get_total_users()
{
  return GetFunction::get_total_users();
}

function get_total_ongoing_projects()
{
  return GetFunction::get_total_ongoing_projects();
}
function get_total_upcoming_projects()
{
  return GetFunction::get_total_upcoming_projects();
}
function get_total_completed_projects()
{
  return GetFunction::get_total_completed_projects();
}
function get_settings($key)
{
  return GetFunction::get_settings($key);
}
function get_average_annual_return()
{
  return GetFunction::get_average_annual_return();
}
function total_capital()
{
  return GetFunction::total_capital();
}

function average_investments()
{
  return GetFunction::average_investments();
}

function total_capital_by_project($pid)
{
  return GetFunction::total_capital_by_project($pid);
}
function total_capital_by_user($uid)
{
  return GetFunction::total_capital_by_user($uid);
}
function total_return_by_user($uid)
{
  return GetFunction::total_return_by_user($uid);
}
function get_total_active_users()
{
  return GetFunction::get_total_active_users();
}
function get_total_inactive_users()
{
  return GetFunction::get_total_inactive_users();
}

function average_return_by_user($uid)
{
  return GetFunction::average_return_by_user($uid);
}

function get_total_ongoing_projects_by_user($uid)
{
  return GetFunction::get_total_ongoing_projects_by_user($uid);
}

function get_total_completed_projects_by_user($uid)
{
  return GetFunction::get_total_ongoing_projects_by_user($uid);
}

function get_total_projects_by_user($uid)
{
  return GetFunction::get_total_projects_by_user($uid);
}
