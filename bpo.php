<?php
require_once 'config.php';
$svc = [
 'slug'=>'bpo','name'=>'Business Process Outsourcing',
 'title'=>'BPO Services & Outsourcing in Zimbabwe | JobFlow',
 'desc'=>"Cut costs and boost efficiency with JobFlow's business process outsourcing: customer service, finance, HR and data management from skilled African teams.",
 'h1'=>'Business Process Outsourcing (BPO)',
 'lead'=>'Our BPO services help businesses improve efficiency and reduce costs by outsourcing non-core functions to our experienced team.',
 'groups'=>[['title'=>'Our core BPO services','intro'=>'We offer a comprehensive suite of BPO solutions tailored to your business needs.','items'=>[
   ['phone','Customer Service','Inbound and outbound support via phone, email, chat, and social media.'],
   ['file-invoice-dollar','Finance & Accounting','Handling accounts payable/receivable, and financial reporting.'],
   ['users','Human Resources','Managing recruitment, payroll processing, and employee onboarding.'],
   ['database','Data Management','Providing accurate data entry, processing, and analytics services.']]]],
 'benefits'=>['title'=>'The benefits of our BPO services','type'=>'img','items'=>[
   ['Improved Productivity','Our team handles your routine and time-consuming tasks with expertise, freeing up your internal resources. This allows your core employees to focus on strategic initiatives, innovation, and driving business growth where it matters most.','images/productivity.jpg','Team collaborating to improve productivity'],
   ['Reduced Costs','Leverage our global talent pool to significantly reduce operational expenses. We help you save on labor, infrastructure, and training costs, leading to a healthier bottom line and increased profitability without sacrificing quality.','images/costs.jpg','Graphs showing reduced business costs'],
   ['Enhanced Customer Experience','Our dedicated and professional customer support teams can provide 24/7 assistance, ensuring your customers receive timely and effective service. This commitment to excellence increases customer satisfaction and builds long-term loyalty.','images/customer-experience.jpg','Happy customer receiving support']]],
 'faqs'=>[
  ['What is business process outsourcing (BPO)?','BPO means hiring a specialist partner to run non-core business functions such as customer service, finance and accounting, HR and data management, so your team can focus on strategy and growth.'],
  ['Which functions can I outsource to JobFlow?','You can outsource customer service, finance and accounting, human resources (recruitment, payroll and onboarding) and data management including data entry, processing and analytics.'],
  ['How does BPO reduce costs?','You save on labor, infrastructure and training by using our skilled African teams instead of building the same capacity in-house.']],
 'ext'=>[['International Association of Outsourcing Professionals','iaop.org','Industry body for outsourcing standards and best practice.','https://www.iaop.org'],['International Labour Organization','ilo.org','Global research on decent work and employment.','https://www.ilo.org']],
 'cta'=>['Ready to optimize your business?',"Let's discuss how our BPO services can reduce your costs and improve efficiency. Get a free consultation today."]];
require 'includes/service_page.php';
