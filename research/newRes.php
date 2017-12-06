<header class="w3-container" style="padding-top:22px">
	<h5><b><i class="fa fa-book fa-fx"></i> New Reseach</b><hr style="margin:0px" /></h5>
</header>
<div class="w3-container" style="">
	<div class="w3-row"  style="min-width:250px; max-width:800px;margin:0px auto;" >
		<form action="javascript:void(0);" onsubmit="return new_research()" class="w3-container w3-margin">
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Title:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Title:</b></div>
				<div class="w3-col s12 l9 m9">
				  <input class="w3-input w3-border" name="res_title" id="res_title" type="text" placeholder="Research Title" required />
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large">Description:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large">Description:</b></div>
				<div class="w3-col s12 l9 m9">
					<textarea id="res_desc" name="res_desc"></textarea>
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Proponents:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"><span class="w3-text-red">*</span> Proponents:</b></div>
				<div class="w3-col s12 l9 m9">
				  <input class="" name="proponents" id="proponents" type="text" placeholder="Middle Name" required />
				</div>
				<script>
				$('#proponents').selectize({
					persist: false,
					createOnBlur: true,
					create: true
				});
				</script>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Adviser:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Adviser:</b></div>
				<div class="w3-col s12 l9 m9">
				  <select id="adviser" placeholder="Pick a state...">
						<option value="">Select a state...</option>
						<option value="AL">Alabama</option>
					</select>
				  <!--<input class="w3-input w3-border" name="user_name" id="user_name" type="text" placeholder="Username" required />-->
				  
				<script>
				$('#adviser').selectize({
					persist: false,
					maxItems: 1,
				});
				</script>
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Panel Chair:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Panel Chair:</b></div>
				<div class="w3-col s12 l9 m9">
					<select id="panelChair" placeholder="Select Panel Chairman">
						<option value="">Select Panel Chairman</option>
						<option value="AL">Alabama</option>
						<option value="A2">Alabama2</option>
						<option value="A1">Alabama3</option>
					</select>
					<script>
					$('#panelChair').selectize({
						persist: false,
						maxItems: 1,
					});
					</script>
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Panel Members:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Panel Members:</b></div>
				<div class="w3-col s12 l9 m9">
				  <select id="panelMem" placeholder="Select Panel Members">
						<option value="">Select Panel Members</option>
						<option value="AL">Alabama</option>
						<option value="A2">Alabama2</option>
						<option value="A1">Alabama3</option>
					</select>
					<script>
					$('#panelMem').selectize({
						persist: false,
						maxItems: 2,
					});
					</script>
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class=" w3-hide-small w3-right w3-large"><span class="w3-text-red">*</span> Course:</b><b class="w3-left w3-large w3-hide-large w3-hide-medium"><span class="w3-text-red">*</span> Course:</b></div>
				<div class="w3-col s12 l9 m9">
				  <select id="course" placeholder="Select Course">
						<option value="">Select Course</option>
						<option value="AL">Alabama</option>
						<option value="A2">Alabama2</option>
						<option value="A1">Alabama3</option>
					</select>
					<script>
					$('#course').selectize({
						persist: false,
						maxItems: 1,
					});
					</script>
				</div>
			</div>

			<button class="w3-button w3-right w3-section w3-blue w3-ripple w3-padding">Submit</button>

			</form>
	</div>
</div>