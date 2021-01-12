// $("#reservation").click(function(){
// 	var form=new FormData(document.getElementById("reservation_form"));
// 	console.log(form)
	
// 	$.ajaxSetup({
// 	  headers: {
// 	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// 	  }
// 	});

// $("#reservation_errors").empty()
// 	$.ajax({
// 		url:'/reservation',
// 		type:'post',
// 		processData:false,
// 		contentType:false,
// 		data:form,
// 		success:(r)=>{
// 			console.log(r);
// 		},
// 		error:(r)=>{
// 			var errors = $.parseJSON(r.responseText).errors;

// 			let div=$(`<div id="errors" class="alert alert-danger" ></div>`)
// 				let ul=$(`<ul align='center'></ul>`)
// 				$.each(errors, function(key, value) {
// 					ul.append(`<li>${this[0]}</li>`)
// 				});
// 				div.append(ul)
// 			$("#reservation_errors").prepend(div)
// 		}
// 	})
// })


