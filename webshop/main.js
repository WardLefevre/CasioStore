$(document).ready(function(){
	cat();
	type();
	product();
	winkelkar();
	
	function cat(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {category:1},
			success : function(data){
				$("#get_category").html(data);
			}
		})
	};
	
	function type(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {type:1},
			success : function(data){
				$("#get_type").html(data);
			}
		})
	};
	
	function product(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getProduct:1},
			success : function(data){
				$("#get_product").html(data);
			}
		})
	};
	
		
	function winkelkar(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {winkelkar:1},
			success : function(data){
				$("#winkelkar").html(data);
			}
		})
	};
	
	$('body').on("click", ".category", function(event) {
		event.preventDefault();
		var catname = $(this).attr("catname");
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {get_selected_Category:1,cat_name:catname},
			success : function(data){
				$("#get_product").html(data);
			}
		});
	});
	
	$("#registreer").click(function(event){
		event.preventDefault();
		$.ajax({
			url : "registrerenaction.php",
			method : "POST",
			data : $("form").serialize(),
			success : function(data){
				$("#registreerbericht").html(data);
			}
		});
	});
	
	$("#login").click(function(event){
		event.preventDefault();
		var email = $("#email").val();
		var pass = $("#wachtwoord").val();
		$.ajax({
			url : "inloggenaction.php",
			method : "POST",
			data : {userLogin:1,userEmail:email,userPassword:pass},
			success : function(data){
				alert(data);
			}
		})
	})
	
	$("body").delegate("#product","click",function(event){
		event.preventDefault();
		var pnr = $(this).attr('pnr');
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {inwinkelkar:1,pid:pnr},
			success : function(data){
				
			}
		})
	})
	
	$("body").delegate(".verwijder","click",function(event){
		event.preventDefault();
		var id = $(this).attr("verwijderid");
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {uitwinkelkar:1,pid:id},
			success : function(data){
				location.reload();
			}
		})	
	})
	
	$("body").delegate(".betalen","click",function(event){
		event.preventDefault();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {betalen:1},
			success : function(data){
				location.reload();
			}
		})	
	})
	
	$("#toevoegen").click(function(event){
		event.preventDefault();
		$.ajax({
			url : "toevoegenaction.php",
			method : "POST",
			data : $("form").serialize(),
			success : function(data){
				$("#toevoegenbericht").html(data);
			}
		});
	});
})


