<template>
  <div class="container-fluid">
    <form @submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">edit</i>
              </div>
              <h4 class="card-title">
                {{ $t('global.edit') }}
                <strong>{{ $t('cruds.nieuwVoertuig.title_singular') }}</strong>
              </h4>
            </div>
            <div class="card-body">
              <back-button></back-button>
            </div>
            <div class="card-body">
              <bootstrap-alert />
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="required">{{
                      $t('cruds.nieuwVoertuig.fields.kenteken')
                    }}</label>
                    <div
                      class="form-group bmd-form-group"
                      :class="{
                        'has-items': entry.kenteken,
                        'is-focused': activeField == 'kenteken'
                      }"
                    >
                      <label class="bmd-label-floating">{{
                        $t('cruds.nieuwVoertuig.fields.kenteken_helper')
                      }}</label>
                      <input
                        class="form-control"
                        type="text"
                        :value="entry.kenteken"
                        @input="updateKenteken"
                        @focus="focusField('kenteken')"
                        @blur="clearFocus"
                        required
                      />
                    </div>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.datum_aanschaf,
                      'is-focused': activeField == 'datum_aanschaf'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.nieuwVoertuig.fields.datum_aanschaf')
                    }}</label>
                    <datetime-picker
                      class="form-control"
                      type="text"
                      :value="entry.datum_aanschaf"
                      @input="updateDatumAanschaf"
                      @focus="focusField('datum_aanschaf')"
                      @blur="clearFocus"
                      required
                    >
                    </datetime-picker>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.soort_voertuig,
                      'is-focused': activeField == 'soort_voertuig'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.nieuwVoertuig.fields.soort_voertuig')
                    }}</label>
                    <v-select
                      name="soort_voertuig"
                      :key="'soort_voertuig-field'"
                      :value="entry.soort_voertuig"
                      :options="lists.soort_voertuig"
                      :reduce="entry => entry.value"
                      @input="updateSoortVoertuig"
                      @search.focus="focusField('soort_voertuig')"
                      @search.blur="clearFocus"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <vue-button-spinner
                class="btn-primary"
                :status="status"
                :isLoading="loading"
                :disabled="loading"
              >
                {{ $t('global.save') }}
              </vue-button-spinner>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  data() {
    return {
      status: '',
      activeField: ''
    }
  },
  computed: {
    ...mapGetters('NieuwVoertuigsSingle', ['entry', 'loading', 'lists'])
  },
  beforeDestroy() {
    this.resetState()
  },
  watch: {
    '$route.params.id': {
      immediate: true,
      handler() {
        this.resetState()
        this.fetchEditData(this.$route.params.id)
      }
    }
  },
  methods: {
    ...mapActions('NieuwVoertuigsSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'setKenteken',
      'setDatumAanschaf',
      'setSoortVoertuig'
    ]),
    updateKenteken(e) {
      this.setKenteken(e.target.value)
    },
    updateDatumAanschaf(e) {
      this.setDatumAanschaf(e.target.value)
    },
    updateSoortVoertuig(value) {
      this.setSoortVoertuig(value)
    },
    submitForm() {
      this.updateData()
        .then(() => {
          this.$router.push({ name: 'nieuw_voertuigs.index' })
          this.$eventHub.$emit('update-success')
        })
        .catch(error => {
          this.status = 'failed'
          _.delay(() => {
            this.status = ''
          }, 3000)
        })
    },
    focusField(name) {
      this.activeField = name
    },
    clearFocus() {
      this.activeField = ''
    }
  }
}
</script>
