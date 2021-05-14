import Vue from 'vue'
import Vuex from 'vuex'

import Alert from './modules/alert'
import I18NStore from './modules/i18n'

import PermissionsIndex from './cruds/Permissions'
import PermissionsSingle from './cruds/Permissions/single'
import RolesIndex from './cruds/Roles'
import RolesSingle from './cruds/Roles/single'
import UsersIndex from './cruds/Users'
import UsersSingle from './cruds/Users/single'
import CrmStatusesIndex from './cruds/CrmStatuses'
import CrmStatusesSingle from './cruds/CrmStatuses/single'
import CrmCustomersIndex from './cruds/CrmCustomers'
import CrmCustomersSingle from './cruds/CrmCustomers/single'
import CrmNotesIndex from './cruds/CrmNotes'
import CrmNotesSingle from './cruds/CrmNotes/single'
import CrmDocumentsIndex from './cruds/CrmDocuments'
import CrmDocumentsSingle from './cruds/CrmDocuments/single'
import ProductCategoriesIndex from './cruds/ProductCategories'
import ProductCategoriesSingle from './cruds/ProductCategories/single'
import ProductTagsIndex from './cruds/ProductTags'
import ProductTagsSingle from './cruds/ProductTags/single'
import ProductsIndex from './cruds/Products'
import ProductsSingle from './cruds/Products/single'
import ContentCategoriesIndex from './cruds/ContentCategories'
import ContentCategoriesSingle from './cruds/ContentCategories/single'
import ContentTagsIndex from './cruds/ContentTags'
import ContentTagsSingle from './cruds/ContentTags/single'
import ContentPagesIndex from './cruds/ContentPages'
import ContentPagesSingle from './cruds/ContentPages/single'
import ContactCompaniesIndex from './cruds/ContactCompanies'
import ContactCompaniesSingle from './cruds/ContactCompanies/single'
import ContactContactsIndex from './cruds/ContactContacts'
import ContactContactsSingle from './cruds/ContactContacts/single'
import FaqCategoriesIndex from './cruds/FaqCategories'
import FaqCategoriesSingle from './cruds/FaqCategories/single'
import FaqQuestionsIndex from './cruds/FaqQuestions'
import FaqQuestionsSingle from './cruds/FaqQuestions/single'
import ExpenseCategoriesIndex from './cruds/ExpenseCategories'
import ExpenseCategoriesSingle from './cruds/ExpenseCategories/single'
import IncomeCategoriesIndex from './cruds/IncomeCategories'
import IncomeCategoriesSingle from './cruds/IncomeCategories/single'
import ExpensesIndex from './cruds/Expenses'
import ExpensesSingle from './cruds/Expenses/single'
import IncomesIndex from './cruds/Incomes'
import IncomesSingle from './cruds/Incomes/single'
import ExpenseReports from './cruds/ExpenseReports'
import NieuwVoertuigsIndex from './cruds/NieuwVoertuigs'
import NieuwVoertuigsSingle from './cruds/NieuwVoertuigs/single'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
  modules: {
    Alert,
    I18NStore,
    PermissionsIndex,
    PermissionsSingle,
    RolesIndex,
    RolesSingle,
    UsersIndex,
    UsersSingle,
    CrmStatusesIndex,
    CrmStatusesSingle,
    CrmCustomersIndex,
    CrmCustomersSingle,
    CrmNotesIndex,
    CrmNotesSingle,
    CrmDocumentsIndex,
    CrmDocumentsSingle,
    ProductCategoriesIndex,
    ProductCategoriesSingle,
    ProductTagsIndex,
    ProductTagsSingle,
    ProductsIndex,
    ProductsSingle,
    ContentCategoriesIndex,
    ContentCategoriesSingle,
    ContentTagsIndex,
    ContentTagsSingle,
    ContentPagesIndex,
    ContentPagesSingle,
    ContactCompaniesIndex,
    ContactCompaniesSingle,
    ContactContactsIndex,
    ContactContactsSingle,
    FaqCategoriesIndex,
    FaqCategoriesSingle,
    FaqQuestionsIndex,
    FaqQuestionsSingle,
    ExpenseCategoriesIndex,
    ExpenseCategoriesSingle,
    IncomeCategoriesIndex,
    IncomeCategoriesSingle,
    ExpensesIndex,
    ExpensesSingle,
    IncomesIndex,
    IncomesSingle,
    ExpenseReports,
    NieuwVoertuigsIndex,
    NieuwVoertuigsSingle
  },
  strict: debug
})
