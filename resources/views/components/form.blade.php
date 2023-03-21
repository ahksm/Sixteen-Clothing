<form :action="'/reviews'" x-show="showForm || showSecondForm" x-on:submit="showForm = false; showSecondForm = false">
    <div class="form-group">
        <textarea name="body" placeholder="Enter reply" x-model="body"
            x-bind:style="{ height: (body.split('\n').length + 1) * 1 + 'rem' || '15px' }" style="font-size: 14px"></textarea>
        <input type="hidden" name="product_id" x-bind:value="$product_id" />
        <input type="hidden" name="parent_id" x-bind:value="$parentId" />
    </div>
    <div class="row justify-content-end space-x-6 items-center buttons">
        <div class="form-group">
            <input type="button" value="Cancel" x-on:click="body = '', showForm = false; showSecondForm = false"
                class="cursor-pointer" />
        </div>
        <div class="form-group">
            <input type="submit" value="Leave Review" class="mr-3" :disabled="body.length === 0"
                class="cursor-pointer" />
        </div>
    </div>
</form>