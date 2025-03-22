<script setup>
</script>
<template>
    <section class="bg-black">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-2xl tracking-tight font-semibold text-center text-white">Contact Me
            </h2>

            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2  font-medium text-white">Your
                        email</label>
                    <input type="email" id="email"
                        class="  border-[1px] border-gray-600   text-base rounded-sm w-full h-12 p-2 bg-black"
                        placeholder="Enter your email address" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2  font-medium text-white">Subject</label>
                    <input type="text" id="subject"
                        class="  border-[1px] border-gray-600   text-base rounded-sm w-full h-12 p-2 bg-black"
                        placeholder="Enter subject" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="subject" class="block mb-2  font-medium text-white">Message</label>
                    <textarea id="message" rows="6"
                        class="block p-2 w-full text-sm text-white  rounded-lg  border border-gray-600 focus:ring-primary-500 focus:border-primary-500 bg-black  placeholder-gray-400  "
                        placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit"
                    class="py-3 px-4 bg-[#f7f7f7] text-black rounded-md font-semibold hover:bg-[#d6d6d6] active:bg-[#999999]">Send
                    message</button>
            </form>
        </div>
        <!--  class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl" -->
    </section>
</template>