<?php
require_once 'config.php';
$svc = [
 'slug'=>'dental_services','name'=>'Dental Practice Support',
 'title'=>'Dental Billing & Practice Support Outsourcing | Job Flow',
 'desc'=>'Outsource dental billing, coding and practice management to expert teams. Job Flow helps practices improve cash flow and spend more time on patient care.',
 'h1'=>'Specialized Dental & Medical Services',
 'lead'=>'We handle the operational details of billing, coding, and practice management, so you can focus on patient care.',
 'groups'=>[['title'=>'Our healthcare solutions','items'=>[
   ['tooth','Dental Billing & Coding','Our expert claim handling and coding ensure maximum, timely reimbursements for your practice.'],
   ['clipboard-list','Dental Practice Management','We provide administrative and operational solutions to enhance day-to-day practice efficiency.'],
   ['user-doctor','General Medical Support','Comprehensive assistance with billing, coding, and administrative tasks for all medical practices.']]]],
 'benefits'=>['title'=>'Benefits for your practice','type'=>'img','items'=>[
   ['More Time for Patient Care','By outsourcing your administrative and billing tasks, you and your staff can dedicate more time and energy to providing exceptional patient care, improving outcomes and satisfaction.','images/dental.jpg','Dentist focused on a patient'],
   ['Increased Revenue & Cash Flow','Our specialized knowledge in dental and medical coding maximizes your claim approvals and reduces denials. This leads to faster reimbursements and a healthier, more predictable cash flow for your practice.','images/dental-revenue.jpg','Chart showing increased revenue']]],
 'faqs'=>[
  ['What dental services can I outsource to Job Flow?','You can outsource dental billing and coding, dental practice management, and general medical billing and administrative support.'],
  ['How does outsourced dental billing improve revenue?','Specialized coding knowledge maximizes claim approvals and reduces denials, which speeds up reimbursements and makes cash flow more predictable.'],
  ['Do you support medical practices as well as dental?','Yes. Our general medical support covers billing, coding and administrative tasks for all types of medical practices.']],
 'ext'=>[['American Dental Association','ada.org','Coding and practice management resources for dental teams.','https://www.ada.org'],['HHS: HIPAA for Professionals','hhs.gov','Official guidance on health information privacy.','https://www.hhs.gov/hipaa/index.html']],
 'cta'=>['Ready to streamline your practice?',"Let's discuss how our specialized services can improve your efficiency and increase revenue. Get a free consultation today."]];
require 'includes/service_page.php';
