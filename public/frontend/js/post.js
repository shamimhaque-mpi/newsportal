class limitPost{
	constructor(url=null, base_url=null){
		limitPost.log();
		limitPost.search(url, base_url);
	}
	static search(url, base_url){
		let checkbox 		= document.querySelectorAll("input[type='checkbox']");
		let input 			= document.querySelectorAll("input[type='text']");
		let select 			= document.querySelectorAll('select');
		let condition 		= {};
		(Object.values(checkbox)).forEach((v, k)=>{
			v.addEventListener('change', function(){
				let name  		= v.getAttribute('name');
				let value 		= v.value;

				if(name){
					if(v.checked == true){
						condition[name] = value;
					}else{
						condition[name] = '';
					}
					limitPost.http(url, condition, base_url);
				}
			});
		});
		(Object.values(input)).forEach((v, k)=>{
			v.addEventListener('input', function(){
				let name  		= v.getAttribute('name');
				let value 		= v.value;
				if(name){
					condition[name] = value;
					limitPost.http(url, condition, base_url);
				}
			});
		});
		(Object.values(select)).forEach((v, k)=>{
			v.addEventListener('change', function(){
				let name  		= v.getAttribute('name');
				let value 		= v.value;
				if(name){
					condition[name] = value;
					limitPost.http(url, condition, base_url);
				}
			});
		});
	}

	static http(url, condition, base_url){
		this.loader('on');
		let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		let data  = condition;
		fetch(url, {
			method: 'post',
			headers: {
		      'Content-Type': 'application/json',
		      'X-CSRF-Token': token,
		    },
		    body: JSON.stringify(data)
		})
		.then(myJson=>myJson.json())
		.then(data=>limitPost.appendBox(data, base_url));
	}

	static appendBox(data, base_url){
		this.loader();
		let elements = '';
		for (var key in data) {
			elements += this.content(data[key], base_url);
		}
		let wrapper       =  document.querySelector('#post-wrapper');
		wrapper.innerHTML = elements;
	}

	static log(){
		setTimeout(()=>{
			console.clear();
			console.log("%cDon't Try To Do Something Here", "color:blue; font-size:100px; font-family:fantasy");
		}, 500);
	}

	static loader(btn='off'){
		let loader = document.querySelector('#loader');
		if(btn=='off' && loader){
			loader.classList.remove('animate__fadeIn');
			loader.classList.add('animate__fadeOut');
		}
		else if(btn=='on' && loader)
		{
			loader.classList.remove('animate__fadeOut');
			loader.classList.add('animate__fadeIn');
		}
	}

	static content(x, base_url){
		let content = `
			<div class="job-box">
			    <div class="company-logo">
			        <img src="${ base_url+'/'+x.company_logo }" alt="logo">
			    </div>
			    <div class="description">
			        <div class="float-left">
			            <h5 class="title">
			                <a href="${base_url+'/jobs_details/'+x.id}">${x.company_name}</a>
			            </h5>
			            <div class="candidate-listing-footer">
			                <ul>
			                    <li><i class="flaticon-work"></i>&nbsp;${(x.job_type).replace('_', ' ')}</li>
			                </ul>
			                <h6>Deadline:&nbsp;${x.end_date}</h6>
			            </div>
			        </div>
			        <div class="div-right">
			            <a href="${base_url+'/jobs_details/'+x.id}" class="apply-button">View</a>
			        </div>
			    </div>
			</div>
		`;
		return content;
	}
}