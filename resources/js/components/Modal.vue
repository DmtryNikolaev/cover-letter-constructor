<template>
	<div
		class="modal fade"
		id="exampleModal"
		tabindex="-1"
		aria-labelledby="exampleModalLabel"
		aria-hidden="true"
	>
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5
						class="modal-title"
						id="exampleModalLabel"
					>Создать навык</h5>
					<button
						type="button"
						class="btn-close"
						data-bs-dismiss="modal"
						aria-label="Close"
					></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label
							for="skillName"
							class="form-label"
						>Название навыка</label>
						<input
							type="text"
							class="form-control"
							id="skillName"
							placeholder="HTML..."
						>
					</div>
					<div class="mb-3">
						<label
							for="skillDescription"
							class="form-label"
						>Описание навыка</label>
						<textarea
							class="form-control"
							id="skillDescription"
							rows="3"
						></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button
						type="button"
						class="btn btn-secondary"
						data-bs-dismiss="modal"
					>Close</button>
					<button
						type="button"
						class="btn btn-primary"
					>Save changes</button>
				</div>
			</div>
		</div>
	</div>
</template>