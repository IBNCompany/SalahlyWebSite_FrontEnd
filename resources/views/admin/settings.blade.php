@extends('admin.layout')

@section('title', 'إعدادات الموقع - لوحة التحكم')
@section('page-title', 'إعدادات الموقع')
@section('page-description', 'إدارة إعدادات الموقع العامة والتفضيلات')

@section('content')
<div class="space-y-8">
    
    <!-- Settings Form -->
    <div class="card-gradient rounded-2xl p-8 shadow-xl animate-fade-in-up">
        <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-gradient-to-br from-seeker-primary to-provider-primary rounded-lg flex items-center justify-center ml-4">
                <i class="fas fa-cog text-white text-xl"></i>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-800">الإعدادات العامة</h2>
                <p class="text-gray-600">قم بتخصيص إعدادات موقعك وتفضيلاتك</p>
            </div>
        </div>

        <form class="space-y-6" method="POST" action="">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <!-- Meta Title -->
                <div class="lg:col-span-2">
                    <label for="meta_name" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-globe ml-2 text-seeker-primary"></i>
                        اسم الموقع
                    </label>
                    <input type="text" 
                           id="meta_name" 
                           name="meta_title" 
                           placeholder="موقع صلحلي و شطبلي"
                           value="{{ $meta_title }}"
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300 hover:border-seeker-primary/50">
                </div>


                <!-- Meta Description -->
                <div class="lg:col-span-2">
                    <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-align-right ml-2 text-seeker-primary"></i>
                        وصف الموقع
                    </label>
                    <textarea id="meta_description" 
                              name="meta_description" 
                              rows="4" 
                              class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300 hover:border-seeker-primary/50 resize-none"
                              placeholder="اكتب وصفاً شاملاً للموقع...">{{ $meta_description }}</textarea>
                </div>

                
<!-- Meta Keywords -->
<div class="lg:col-span-2">
    <label for="meta_keywords" class="block text-sm font-medium text-gray-700 mb-2">
        <i class="fas fa-tags ml-2 text-seeker-primary"></i>
        الكلمات المفتاحية
    </label>
    <textarea id="meta_keywords" 
              name="meta_keywords" 
              rows="3" 
              class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300 hover:border-seeker-primary/50 resize-none"
              placeholder="أدخل الكلمات المفتاحية مفصولة بفواصل (مثال: برمجة, تطوير, لارافيل)...">{{ $meta_keywords }}</textarea>
</div>

            </div>

                <div class="flex space-x-3 space-x-reverse">
                    <button type="submit" 
                            class="px-8 py-3 bg-gradient-to-r from-seeker-primary to-provider-primary text-white rounded-lg font-medium hover:shadow-lg hover:scale-[1.02] transition-all duration-300">
                        <i class="fas fa-save ml-2"></i>
                        حفظ الإعدادات
                    </button>
                </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Form validation and interactive features
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, select, textarea');
        
        // Add input animation effects
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentNode.querySelector('label').style.color = '#070a7f';
            });
            
            input.addEventListener('blur', function() {
                this.parentNode.querySelector('label').style.color = '#374151';
            });
        });
        
        // Form submission with loading state
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin ml-2"></i>جاري الحفظ...';
            submitBtn.disabled = true;
            
            // Simulate form processing
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check ml-2"></i>تم الحفظ بنجاح';
                submitBtn.style.background = 'linear-gradient(135deg, #10b981, #059669)';
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    submitBtn.style.background = '';
                }, 2000);
            }, 1000);
        });
    });
</script>
@endpush