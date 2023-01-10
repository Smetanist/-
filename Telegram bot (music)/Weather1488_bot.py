from links import *
import random
from telebot import types
import telebot
bot = telebot.TeleBot('5378344678:AAGCkKjzj-hxI26GdaJLtVwy6GQ7TYpi4XA')

@bot.message_handler(content_types=['text'])
def get_text_message(message):

    if message.text == "Привет":
        bot.send_message(message.from_user.id, "Привет, хочешь послушать музыку?")

        keyboard = types.InlineKeyboardMarkup()

        Key_pop = types.InlineKeyboardButton(text='Поп', callback_data='pop_music')
        keyboard.add(Key_pop)

        Key_rock = types.InlineKeyboardButton(text='Рок', callback_data='rock_music')
        keyboard.add(Key_rock)

        Key_rap = types.InlineKeyboardButton(text='Рэп', callback_data='rap_music')
        keyboard.add(Key_rap)

        Key_electronic = types.InlineKeyboardButton(text='Электронная', callback_data='electronic_music')
        keyboard.add(Key_electronic)

        Key_classical = types.InlineKeyboardButton(text='Классическая', callback_data='classical_music')
        keyboard.add(Key_classical)

        Key_jazz = types.InlineKeyboardButton(text='Джаз', callback_data='jazz_music')
        keyboard.add(Key_jazz)

        Key_country = types.InlineKeyboardButton(text='Кантри', callback_data='country_music')
        keyboard.add(Key_country)

        Key_folk = types.InlineKeyboardButton(text='Фолк', callback_data='folk_music')
        keyboard.add(Key_folk)

        Key_bluse = types.InlineKeyboardButton(text='Блюз', callback_data='bluse_music')
        keyboard.add(Key_bluse)

        Key_opera = types.InlineKeyboardButton(text='Опера', callback_data='opera_music')
        keyboard.add(Key_opera)

        bot.send_message(message.from_user.id, text='Выберете жанр музыки', reply_markup=keyboard)
    elif message.text == "/help":
        bot.send_message(message.from_user.id, "Напиши привет")
    else:
        bot.send_message(message.from_user.id, "Я тебя не понимаю. Напиши /help.")

@bot.callback_query_handler(func=lambda call: True)
def callback_worker(call):
    if call.data == "pop_music":
        msg = random.choice(first_pop) + ' | ' + random.choice(second_pop) + ' | ' + random.choice(third_pop)
        bot.send_message(call.message.chat.id, msg)
    if call.data == "rock_music":
        msg = random.choice(first_rock) + ' | ' + random.choice(second_rock) + ' | ' + random.choice(third_rock)
        bot.send_message(call.message.chat.id, msg)
    if call.data == "rap_music":
        msg = random.choice(first_rap) + ' | ' + random.choice(second_rap) + ' | ' + random.choice(third_rap)
        bot.send_message(call.message.chat.id, msg)
    if call.data == "electronic_music":
        msg = random.choice(first_electronic) + ' | ' + random.choice(second_electronic) + ' | ' + random.choice(third_electronic)
        bot.send_message(call.message.chat.id, msg)
    if call.data == "classical_music":
        msg = random.choice(first_classical) + ' | ' + random.choice(second_classical) + ' | ' + random.choice(third_classical)
        bot.send_message(call.message.chat.id, msg)
    if call.data == "jazz_music":
        msg = random.choice(first_jazz) + ' | ' + random.choice(second_jazz) + ' | ' + random.choice(third_jazz)
        bot.send_message(call.message.chat.id, msg)
    if call.data == "country_music":
        msg = random.choice(first_country) + ' | ' + random.choice(second_country) + ' | ' + random.choice(third_country)
        bot.send_message(call.message.chat.id, msg)
    if call.data == "folk_music":
        msg = random.choice(first_folk) + ' | ' + random.choice(second_folk) + ' | ' + random.choice(third_folk)
        bot.send_message(call.message.chat.id, msg)
    if call.data == "bluse_music":
        msg = random.choice(first_bluse) + ' | ' + random.choice(second_bluse) + ' | ' + random.choice(third_bluse)
        bot.send_message(call.message.chat.id, msg)
    if call.data == "opera_music":
        msg = random.choice(first_opera) + ' | ' + random.choice(second_opera) + ' | ' + random.choice(third_opera)
        bot.send_message(call.message.chat.id, msg)

bot.polling(none_stop=True, interval=0) 
