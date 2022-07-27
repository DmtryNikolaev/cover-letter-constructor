<script>
import Modal from "./Modal.vue";

export default {
	components: {
		Modal,
	},
};
</script>

<template>
	<div class="container mt-3">

		<div class="form-floating">
			<textarea
				class="cover-letter form-control"
				placeholder="Leave a comment here"
				id="floatingTextarea"
			></textarea>
			<label for="floatingTextarea">Сопроводительное письмо</label>
		</div>

		<div class="buttons mt-2">
			<button
				type="button"
				class="btn btn-primary"
				data-bs-toggle="modal"
				data-bs-target="#exampleModal"
			>
				Добавить навык
			</button>
		</div>
		<Modal />
	</div>
</template>

<style scoped>
.cover-letter {
	height: 100%;
}
</style>
