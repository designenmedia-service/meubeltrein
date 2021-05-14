<?php

namespace Database\Seeders;

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 40,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 41,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 42,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 43,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 44,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'product_create',
            ],
            [
                'id'    => 50,
                'title' => 'product_edit',
            ],
            [
                'id'    => 51,
                'title' => 'product_show',
            ],
            [
                'id'    => 52,
                'title' => 'product_delete',
            ],
            [
                'id'    => 53,
                'title' => 'product_access',
            ],
            [
                'id'    => 54,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 55,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 56,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 57,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 58,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 59,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 60,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 61,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 62,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 63,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 64,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 65,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 66,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 67,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 68,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 69,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 70,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 71,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 72,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 73,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 74,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 75,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 76,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 77,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 78,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 79,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 80,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 81,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 82,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 83,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 84,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 85,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 86,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 87,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 88,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 89,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 90,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 91,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 92,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 93,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 94,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 95,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 96,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 97,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 98,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 99,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 100,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 101,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 102,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 103,
                'title' => 'expense_create',
            ],
            [
                'id'    => 104,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 105,
                'title' => 'expense_show',
            ],
            [
                'id'    => 106,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 107,
                'title' => 'expense_access',
            ],
            [
                'id'    => 108,
                'title' => 'income_create',
            ],
            [
                'id'    => 109,
                'title' => 'income_edit',
            ],
            [
                'id'    => 110,
                'title' => 'income_show',
            ],
            [
                'id'    => 111,
                'title' => 'income_delete',
            ],
            [
                'id'    => 112,
                'title' => 'income_access',
            ],
            [
                'id'    => 113,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 114,
                'title' => 'voertuigen_access',
            ],
            [
                'id'    => 115,
                'title' => 'nieuw_voertuig_create',
            ],
            [
                'id'    => 116,
                'title' => 'nieuw_voertuig_edit',
            ],
            [
                'id'    => 117,
                'title' => 'nieuw_voertuig_show',
            ],
            [
                'id'    => 118,
                'title' => 'nieuw_voertuig_delete',
            ],
            [
                'id'    => 119,
                'title' => 'nieuw_voertuig_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
