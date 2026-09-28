<?php
require_once 'config.php';
$svc = [
 'slug'=>'finance_accounting','name'=>'Finance & Accounting Outsourcing',
 'title'=>'Finance & Accounting Outsourcing | Job Flow',
 'desc'=>'Outsource payroll, bookkeeping and financial analysis to skilled African accountants. Improve accuracy, cut costs and decide with confidence. Free consultation.',
 'h1'=>'Financial and Accounting Services',
 'lead'=>'Our finance and accounting services help businesses manage their financial operations efficiently and effectively, from payroll to financial analysis.',
 'groups'=>[['title'=>'Our financial solutions','intro'=>'We provide end-to-end financial management to ensure accuracy and compliance.','items'=>[
   ['file-invoice-dollar','Payroll Processing','Ensuring employees are paid accurately and on time, with full tax compliance and benefits administration.'],
   ['calculator','Accounting & Bookkeeping','Providing accurate financial record-keeping and reporting, including accounts payable/receivable.'],
   ['chart-column','Financial Analysis & Planning','Offering insights, budgeting, and strategic planning to help you make informed financial decisions.']]]],
 'benefits'=>['title'=>'The benefits of our financial services','type'=>'img','items'=>[
   ['Improved Accuracy','Our expert team leverages proven processes and technology to ensure accurate and timely financial reporting. This meticulous attention to detail reduces the risk of costly errors and ensures full compliance.','images/accuracy.jpg','Financial documents being reviewed for accuracy'],
   ['Reduced Costs',"By outsourcing your financial operations, you can significantly lower overhead. Save on labor, infrastructure, and expensive accounting software, directly improving your bottom line.",'images/financial-costs.jpg','Piggy bank symbolizing reduced costs'],
   ['Informed Decisions',"Gain a clearer picture of your company's financial health. With our clear financial analysis, forecasting, and strategic planning, you can make smarter, data-driven decisions about your business's future.",'images/decisions.jpg','Business leader making an informed decision with charts']]],
 'faqs'=>[
  ['What finance and accounting services can I outsource?','You can outsource payroll processing, accounting and bookkeeping (including accounts payable and receivable), and financial analysis and planning.'],
  ['How does outsourcing improve financial accuracy?','Proven processes and technology, plus a dedicated team focused on detail, reduce costly errors and support full compliance.'],
  ['Will outsourcing lower my accounting costs?','Yes. You save on labor, infrastructure and expensive accounting software, which directly improves your bottom line.']],
 'ext'=>[['IFRS Foundation','ifrs.org','Global accounting standards used in over 140 jurisdictions.','https://www.ifrs.org'],['ZIMRA','zimra.co.zw','Zimbabwe Revenue Authority: tax and compliance information.','https://www.zimra.co.zw']],
 'cta'=>['Ready to strengthen your finances?',"Let's talk about how our financial and accounting services can improve your accuracy and reduce costs. Get a free consultation today."]];
require 'includes/service_page.php';
