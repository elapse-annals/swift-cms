<template>
    <el-row>
    <el-col :span="4">
        <label for="id">id</label>
    </el-col>
    <el-col :span="16">
        <el-input id="id"
                  :class="{aggravation:detail_data.id}"
                  v-model="detail_data.id"
                  :disabled="is_disabled_edit"
                  placeholder="id"></el-input>
    </el-col>
</el-row>
<el-row>
    <el-col :span="4">
        <label for="title">title</label>
    </el-col>
    <el-col :span="16">
        <el-input id="title"
                  :class="{aggravation:detail_data.title}"
                  v-model="detail_data.title"
                  :disabled="is_disabled_edit"
                  placeholder="title"></el-input>
    </el-col>
</el-row>
<el-row>
    <el-col :span="4">
        <label for="content">content</label>
    </el-col>
    <el-col :span="16">
        <el-input id="content"
                  :class="{aggravation:detail_data.content}"
                  v-model="detail_data.content"
                  :disabled="is_disabled_edit"
                  placeholder="content"></el-input>
    </el-col>
</el-row>
<el-row>
    <el-col :span="4">
        <label for="group_id">group_id</label>
    </el-col>
    <el-col :span="16">
        <el-input id="group_id"
                  :class="{aggravation:detail_data.group_id}"
                  v-model="detail_data.group_id"
                  :disabled="is_disabled_edit"
                  placeholder="group_id"></el-input>
    </el-col>
</el-row>
<el-row>
    <el-col :span="4">
        <label for="created_at">created_at</label>
    </el-col>
    <el-col :span="16">
        <el-input id="created_at"
                  :class="{aggravation:detail_data.created_at}"
                  v-model="detail_data.created_at"
                  :disabled="is_disabled_edit"
                  placeholder="created_at"></el-input>
    </el-col>
</el-row>
<el-row>
    <el-col :span="4">
        <label for="created_by">created_by</label>
    </el-col>
    <el-col :span="16">
        <el-input id="created_by"
                  :class="{aggravation:detail_data.created_by}"
                  v-model="detail_data.created_by"
                  :disabled="is_disabled_edit"
                  placeholder="created_by"></el-input>
    </el-col>
</el-row>
<el-row>
    <el-col :span="4">
        <label for="updated_at">updated_at</label>
    </el-col>
    <el-col :span="16">
        <el-input id="updated_at"
                  :class="{aggravation:detail_data.updated_at}"
                  v-model="detail_data.updated_at"
                  :disabled="is_disabled_edit"
                  placeholder="updated_at"></el-input>
    </el-col>
</el-row>
<el-row>
    <el-col :span="4">
        <label for="updated_by">updated_by</label>
    </el-col>
    <el-col :span="16">
        <el-input id="updated_by"
                  :class="{aggravation:detail_data.updated_by}"
                  v-model="detail_data.updated_by"
                  :disabled="is_disabled_edit"
                  placeholder="updated_by"></el-input>
    </el-col>
</el-row>

</template>
