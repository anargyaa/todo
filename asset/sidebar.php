<div id="sidebar" class="bg-[#f5f5f5] min-h-screen p-4">
	<h1 class="font-bold text-2xl">Menu</h1>
	<div id="card-user" onclick="window.location.href= '#';" class="flex justify-between items-center py-2 px-2.5 mt-4 rounded-xl outline outline-1 cursor-pointer active:bg-green-300 hover:outline-green-300 hover:outline-2">
		<div class="flex gap-2">
			<div class="avatar online">
		        <div class="w-12 rounded-full">
		        	<img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
		        </div>
		    </div>
		    <div>
		    	<h1>Jhon Doe</h1>
		    	<span class="font-light text-xs">Assistant Manager</span>
		    </div>
		</div>
	    <div class="">
	    	<img src="asset/svg/arrow-round.svg">
	    </div>
	</div>
	<div id="menu" class="flex flex-col">
		<div id="task" class="flex flex-col gap-2 mt-4">
			<h1 class="text-sm font-semibold">TASKS</h1>
			<div id="list" onclick="window.location.href= 'index.php?';" class="flex items-center gap-2 h-14 ml-2 py-2 px-2.5 rounded-xl outline outline-1 cursor-pointer active:bg-green-300 hover:outline-green-300 hover:outline-2">
				<img src="asset/svg/list.svg">
				<h1>Task List</h1>
			</div>
			<div id="list" onclick="window.location.href= 'index.php?v=review';" class="flex items-center gap-2 h-14 ml-2 mt-2 py-2 px-2.5 rounded-xl outline outline-1 cursor-pointer active:bg-green-300 hover:outline-green-300 hover:outline-2">
				<img src="asset/svg/list-check.svg">
				<h1>Task Review</h1>
			</div>
			<div id="list" onclick="window.location.href= 'index.php?v=taskmanage';" class="flex items-center gap-2 h-14 ml-2 mt-2 py-2 px-2.5 rounded-xl outline outline-1 cursor-pointer active:bg-green-300 hover:outline-green-300 hover:outline-2">
				<img src="asset/svg/column.svg">
				<h1>Task Management</h1>
			</div>
		</div>
		<div id="user" class="flex flex-col gap-2 mt-4">
			<h1 class="text-sm font-semibold">USERS</h1>
			<div id="list" onclick="window.location.href= 'index.php?v=usermanage';" class="flex items-center gap-2 h-14 ml-2 py-2 px-2.5 rounded-xl outline outline-1 cursor-pointer active:bg-green-300 hover:outline-green-300 hover:outline-2">
				<img src="asset/svg/column.svg">
				<h1>User Management</h1>
			</div>
			<div id="logout" class="flex items-center gap-2 h-14 ml-2 py-2 px-2.5 rounded-xl outline outline-1 cursor-pointer active:bg-red-400 hover:outline-red-400 hover:outline-2">
				<img src="asset/svg/logout.svg">
				<h1>Logout</h1>
			</div>
		</div>
	</div>
</div>
<script>
	// Get the current path
	const path = window.location.pathname;
	const cardUser = document.getElementById('card-user');

	// Find the corresponding link and add the 'active' class
	document.querySelectorAll('a').forEach(function(element) {
	    if (element.getAttribute('href') === path) {
	    }
	});

	cardUser.addEventListener('click', function() {
		window.location.href = '#';
	});

	function GetURLParameter(sParam)
	{
	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('&');
	    for (var i = 0; i < sURLVariables.length; i++) 
	    {
	        var sParameterName = sURLVariables[i].split('=');
	        if (sParameterName[0] == sParam) 
	        {
	            return sParameterName[1];
	        }
	    }
	}
	var view = GetURLParameter('v');
	document.getElementById('list').forEach(function(element) {
	    if (view = "review") {
	        element.classList.add('bg-green-400');
	    }
	});
	console.log(view);
	document.getElementById("modul").innerHTML = modul;
	document.getElementById("aksi").innerHTML = aksi;
</script>