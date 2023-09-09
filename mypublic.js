(function( $ ) {
	'use strict';
$(document).ready(function($){         
    $(".elementor-element-6e79635 .tijarah-btn").addClass("showformpopupfashion");
    $(".elementor-element-242661a .tijarah-btn").addClass("showformpopupelectronics");
    $(".elementor-element-8f2eba7 .tijarah-btn").addClass("showformpopupfood");
    $(".elementor-element-acb7ce5 .tijarah-btn").addClass("showformpopupfurniture");
    $(".elementor-element-4d9ae58 .tijarah-btn").addClass("showformpopup");
    $(".elementor-element-dc640a5 .tijarah-btn").addClass("showformpopup");
    $(".elementor-element-40e2dab .tijarah-btn").addClass("showformpopup");
    $(".elementor-element-cb3c045 .tijarah-btn").addClass("showformpopup");
    
    $(".elementor-element-6e79635 .tijarah-btn").attr("data-toggle","modal");
    $(".elementor-element-242661a .tijarah-btn").attr("data-toggle","modal");
    $(".elementor-element-8f2eba7 .tijarah-btn").attr("data-toggle","modal");
    $(".elementor-element-acb7ce5 .tijarah-btn").attr("data-toggle","modal");
    $(".elementor-element-4d9ae58  .tijarah-btn").attr("data-toggle","modal");
    $(".elementor-element-dc640a5  .tijarah-btn").attr("data-toggle","modal");
    $(".elementor-element-40e2dab  .tijarah-btn").attr("data-toggle","modal");
    $(".elementor-element-cb3c045  .tijarah-btn").attr("data-toggle","modal");

    $(".elementor-element-6e79635 .tijarah-btn").attr("data-target","#exampleModal");
    $(".elementor-element-242661a .tijarah-btn").attr("data-target","#exampleModal");
    $(".elementor-element-8f2eba7 .tijarah-btn").attr("data-target","#exampleModal");
    $(".elementor-element-acb7ce5 .tijarah-btn").attr("data-target","#exampleModal");
    $(".elementor-element-4d9ae58  .tijarah-btn").attr("data-target","#exampleModal");
    $(".elementor-element-dc640a5   .tijarah-btn").attr("data-target","#exampleModal");
    $(".elementor-element-40e2dab   .tijarah-btn").attr("data-target","#exampleModal");
    $(".elementor-element-cb3c045   .tijarah-btn").attr("data-target","#exampleModal");




    $("#myForm").css("display","none");

    $("#data_sbt").click(function(){
    
        var fname1 = $("#fname1").val();
        var email1 = $("#email1").val();
        var number = $("#number").val();
        var my_country_field= $("#my_country_field").val();
      

if(fname1==''){
   $('#first').html('*Please Enter Your Name ');
    return false;
}
if(email1==''){
    $('#require').html('*Please Enter Your Email ');
     return false;
 }

        var data = {
            'action': 'my_action1',
            'fname1': fname1,
            'email1' : email1,
            'number' : number,
            'my_country_field' : my_country_field
        };
        jQuery.post(ajax_object1.ajax_url1, data, function(response) {
           
        });
        $("#fname1").val('').empty();
        $("#email1").val('').empty();
        $("#number").val('').empty();
        $("#my_country_field").empty();
    
    });
    $(".showformpopupelectronics").click(function(){
        $("#myForm").css("display","block");
        var url='http://demo.codexinfra.com/bazaar/product-category/electornics/';
        $("#data_sbt").prop("href", url);
    

    });
    $(".showformpopupfashion").click(function(){
        $("#myForm").css("display","block");
        var url='http://demo.codexinfra.com/bazaar/product-category/fashion/';
        $("#data_sbt").prop("href", url);
 

    });
    $(".showformpopupfood").click(function(){
        $("#myForm").css("display","block");
        var url='http://demo.codexinfra.com/bazaar/product-category/food/';
        $("#data_sbt").prop("href", url);
    

    });
    $(".showformpopupfurniture").click(function(){
        $("#myForm").css("display","block");
        var url='http://demo.codexinfra.com/bazaar/product-category/furniture/';
        $("#data_sbt").prop("href", url);
  

    });
   
   
    $("#my_country_field").select2({

    });
      
 });

 })( jQuery );
