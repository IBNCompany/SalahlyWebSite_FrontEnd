@extends('admin.layout')

@section('title', 'إضافة مستخدم جديد')
@section('page-title', 'إضافة مستخدم جديد')
@section('page-description', 'إنشاء حساب مستخدم جديد')

@section('content')
<div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up max-w-3xl mx-auto">
    <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-gray-700 font-semibold mb-2">الاسم الكامل</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                   class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-gray-700 font-semibold mb-2">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                   class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-gray-700 font-semibold mb-2">كلمة المرور</label>
            <div class="relative">
                <input type="password" id="password" name="password" required
                       class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                <button type="button" onclick="togglePassword('password')"
                        class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                    <i class="fas fa-eye" id="password-toggle"></i>
                </button>
            </div>
            @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Password Confirmation -->
        <div>
            <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">تأكيد كلمة المرور</label>
            <div class="relative">
                <input type="password" id="password_confirmation" name="password_confirmation" required
                       class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                <button type="button" onclick="togglePassword('password_confirmation')"
                        class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                    <i class="fas fa-eye" id="password_confirmation-toggle"></i>
                </button>
            </div>
            @error('password_confirmation') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Options -->
        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-gray-800">الخيارات</h3>
            
            <!-- Super Admin -->
            <div class="flex items-center">
                <input type="checkbox" id="is_super_admin" name="is_super_admin" value="1" 
                       {{ old('is_super_admin') ? 'checked' : '' }}
                       class="w-4 h-4 text-seeker-primary bg-gray-100 border-gray-300 rounded focus:ring-seeker-primary focus:ring-2">
                <label for="is_super_admin" class="mr-2 text-sm font-medium text-gray-700">
                    جعل هذا المستخدم مديراً
                </label>
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="flex justify-end space-x-4 space-x-reverse">
            <a href="{{ route('admin.users.index') }}"
               class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-all duration-300">
                <i class="fas fa-arrow-right ml-2"></i> إلغاء
            </a>
            <button type="submit"
                    class="px-6 py-3 bg-gradient-to-r from-seeker-primary to-provider-primary text-white rounded-lg font-medium hover:shadow-lg hover:scale-[1.02] transition-all duration-300">
                <i class="fas fa-user-plus ml-2"></i> إضافة المستخدم
            </button>
        </div>
    </form>
</div>

<script>
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const toggle = document.getElementById(fieldId + '-toggle');
    
    if (field.type === 'password') {
        field.type = 'text';
        toggle.className = 'fas fa-eye-slash';
    } else {
        field.type = 'password';
        toggle.className = 'fas fa-eye';
    }
}
</script>
@endsection