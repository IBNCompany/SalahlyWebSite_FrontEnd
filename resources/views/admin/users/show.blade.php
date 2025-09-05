@extends('admin.layout')

@section('title', 'عرض المستخدم')
@section('page-title', 'عرض المستخدم')
@section('page-description', 'تفاصيل المستخدم')

@section('content')
<div class="space-y-6">
    
    <!-- Header Actions -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center space-x-4 space-x-reverse">
            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-seeker-primary to-provider-primary flex items-center justify-center text-white text-2xl font-bold">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h1>
                <p class="text-gray-600">{{ $user->email }}</p>
            </div>
        </div>
        
        <div class="flex items-center space-x-3 space-x-reverse">
            <a href="{{ route('admin.users.edit', $user) }}" 
               class="px-4 py-2 bg-yellow-600 text-white rounded-lg font-medium hover:bg-yellow-700 transition-colors">
                <i class="fas fa-edit ml-2"></i> تعديل
            </a>
            <a href="{{ route('admin.users.index') }}" 
               class="px-4 py-2 bg-gray-600 text-white rounded-lg font-medium hover:bg-gray-700 transition-colors">
                <i class="fas fa-arrow-right ml-2"></i> العودة
            </a>
        </div>
    </div>

    <!-- User Details -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Basic Information -->
        <div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up">
            <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-user text-seeker-primary ml-2"></i>
                المعلومات الأساسية
            </h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">الاسم الكامل</label>
                    <p class="text-gray-800 font-semibold">{{ $user->name }}</p>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">البريد الإلكتروني</label>
                    <p class="text-gray-800 font-semibold">{{ $user->email }}</p>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">نوع المستخدم</label>
                    @if($user->is_super_admin)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                            <i class="fas fa-crown text-xs ml-1"></i>
                            مدير النظام
                        </span>
                    @else
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                            <i class="fas fa-user text-xs ml-1"></i>
                            منشئ محتوي
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <!-- Account Status -->
        <div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up">
            <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-shield-alt text-seeker-primary ml-2"></i>
                حالة الحساب
            </h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">تاريخ التسجيل</label>
                    <p class="text-gray-800 font-semibold">{{ $user->created_at->format('Y/m/d H:i') }}</p>
                    <p class="text-sm text-gray-500">{{ $user->created_at->diffForHumans() }}</p>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">آخر تحديث</label>
                    <p class="text-gray-800 font-semibold">{{ $user->updated_at->format('Y/m/d H:i') }}</p>
                    <p class="text-sm text-gray-500">{{ $user->updated_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Activity Statistics -->
    <div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up">
        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
            <i class="fas fa-chart-bar text-seeker-primary ml-2"></i>
            إحصائيات النشاط
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-blue-50 p-4 rounded-lg text-center">
                <div class="text-2xl font-bold text-blue-600">0</div>
                <div class="text-sm text-blue-500">المقالات المنشورة</div>
            </div>
            
            <div class="bg-green-50 p-4 rounded-lg text-center">
                <div class="text-2xl font-bold text-green-600">0</div>
                <div class="text-sm text-green-500">التعليقات</div>
            </div>
            
            <div class="bg-purple-50 p-4 rounded-lg text-center">
                <div class="text-2xl font-bold text-purple-600">{{ $user->created_at->diffInDays(now()) }}</div>
                <div class="text-sm text-purple-500">أيام في النظام</div>
            </div>
            
            <div class="bg-orange-50 p-4 rounded-lg text-center">
                <div class="text-2xl font-bold text-orange-600">0</div>
                <div class="text-sm text-orange-500">نقاط النشاط</div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up">
        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
            <i class="fas fa-cogs text-seeker-primary ml-2"></i>
            الإجراءات السريعة
        </h2>
        
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('admin.users.edit', $user) }}"
               class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white rounded-lg font-medium hover:bg-yellow-700 transition-colors">
                <i class="fas fa-edit text-sm ml-2"></i>
                تعديل المستخدم
            </a>
            
            @if(!$user->is_super_admin && auth()->id() != $user->id)
            <a  href="{{ route('admin.users.toggle-super', $user) }}"
                    class="inline-flex items-center px-4 py-2 bg-purple-600 text-white rounded-lg font-medium hover:bg-purple-700 transition-colors">
                <i class="fas fa-crown text-sm ml-2"></i>
                جعله مديراً
            </a>
            @elseif($user->is_super_admin && auth()->id() != $user->id)
            <a  href="{{ route('admin.users.toggle-super', $user) }}"
                    class="inline-flex items-center px-4 py-2 bg-purple-600 text-white rounded-lg font-medium hover:bg-purple-700 transition-colors">
                <i class="fas fa-user text-sm ml-2"></i>
                جعله منشئ محتوي
            </a>
            @endif
            
            @if(auth()->id() != $user->id)
            <button onclick="confirmDelete('{{ route('admin.users.destroy', $user) }}')"
                    class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg font-medium hover:bg-red-700 transition-colors">
                <i class="fas fa-trash text-sm ml-2"></i>
                حذف المستخدم
            </button>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function confirmDelete(url) {
    Swal.fire({
        title: 'هل أنت متأكد؟',
        text: 'لن تتمكن من التراجع عن هذا الإجراء وسيتم حذف المستخدم نهائياً',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'نعم، احذف!',
        cancelButtonText: 'إلغاء'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.createElement('form');
            form.method = 'DELETE';
            form.action = url;
            
            const csrfToken = document.createElement('input');
            csrfToken.type = 'hidden';
            csrfToken.name = '_token';
            csrfToken.value = '{{ csrf_token() }}';
            form.appendChild(csrfToken);
            
            const methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'DELETE';
            form.appendChild(methodInput);
            
            document.body.appendChild(form);
            form.submit();
        }
    });
}
</script>
@endpush