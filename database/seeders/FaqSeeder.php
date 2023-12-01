<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Faq\Models\Faq;
use Botble\Faq\Models\FaqCategory;

class FaqSeeder extends BaseSeeder
{
    public function run(): void
    {
        Faq::query()->truncate();
        FaqCategory::query()->truncate();

        $categories = [
            'SHIPPING',
            'PAYMENT',
            'ORDER & RETURNS',
        ];

        foreach ($categories as $index => $category) {
            FaqCategory::query()->create([
                'name' => $category,
                'order' => $index,
            ]);
        }

        $faqs = [
            [
                'question' => 'Which Shipping Methods Are Available?',
                'answer' => 'At TransP, We offer a diverse range of efficient and reliable shipping methods tailored to meet the unique needs of our valued customers. Our comprehensive selection includes both domestic and international options, designed to ensure that your goods reach their intended destinations promptly and securely',
                'category_id' => 1,
            ],
            [
                'question' => 'Do You Ship Internationally?',
                'answer' => 'Absolutely, we’re pleased to inform you that we do offer international shipping services at TransP. Our global reach allows us to connect your shipments to virtually any corner of the world with precision and care. Whether you’re sending packages to neighboring countries or across continents, our experienced team is well-versed in navigating international regulations, customs procedures, and logistics intricacies.',
                'category_id' => 1,
            ],
            [
                'question' => 'How Long Will It Take To Get My Package?',
                'answer' => 'At TransP, we understand the significance of timely deliveries, and we strive to provide accurate and dependable delivery estimates for your packages. The time it takes for your package to reach its destination can vary based on several factors, including the chosen shipping method, the origin and destination locations, as well as any customs procedures for international shipments.',
                'category_id' => 1,
            ],
            [
                'question' => 'What Payment Methods Are Accepted?',
                'answer' => 'We’ve designed our payment process at TransP to be flexible and convenient, accommodating a variety of payment methods to suit your preferences. We accept major credit and debit cards, including Visa, MasterCard, American Express, and Discover, allowing you to securely complete transactions online or over the phone. ',
                'category_id' => 2,
            ],
            [
                'question' => 'Is Buying On-Line Safe?',
                'answer' => 'Absolutely, safety and security are paramount when it comes to online purchases, and we understand your concerns. At TransP, we prioritize the protection of your personal and financial information. Our online platform is equipped with robust encryption technology that safeguards your data, ensuring that your sensitive details remain confidential during the purchasing process.',
                'category_id' => 2,
            ],
            [
                'question' => 'How do I place an Order?',
                'answer' => 'Placing an order with TransP is a straightforward and user-friendly process. Here’s a step-by-step guide to help you through the process: Visit Our Website, Choose Shipping Details, Select Shipping Method, Review and Confirm',
                'category_id' => 3,
            ],
            [
                'question' => 'How Can I Cancel Or Change My Order?',
                'answer' => 'We understand that plans can change, and we’re here to assist you with order modifications or cancellations at TransP. If you need to make changes to your order or cancel it, please follow these steps: Contact Customer Support, Provide Order Details, Request Changes.',
                'category_id' => 3,
            ],
            [
                'question' => 'Do I need an account to place an order?',
                'answer' => 'At TransP, we aim to provide a convenient and flexible ordering process. While having an account is not mandatory, creating one can offer you several benefits that enhance your overall experience. Here’s a breakdown of both options: Ordering Without an Account vs Creating an Account.',
                'category_id' => 3,
            ],
            [
                'question' => 'How Do I Track My Order?',
                'answer' => 'Tracking your order at TransP is a straightforward process that keeps you informed about the progress of your shipment. Here’s how you can track your order: Order Confirmation Email, Visit Our Website, Enter Tracking Number, View Shipment Status',
                'category_id' => 3,
            ],
            [
                'question' => 'How Can I Return a Product?',
                'answer' => 'We understand that occasionally, you may need to return a product, and we’re here to guide you through the process to ensure a smooth experience. Here’s how you can initiate a product return at Transp: Check Return Policy, Contact Customer Support, Provide Order Details.',
                'category_id' => 3,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::query()->create($faq);
        }
    }
}
