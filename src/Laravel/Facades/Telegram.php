<?php

namespace Telegram\Bot\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Telegram\Bot\BotsManager;

/**
 * @see \Telegram\Bot\BotsManager
 *
 * @method static \Telegram\Bot\BotsManager setContainer(\Psr\Container\ContainerInterface $container)
 * @method static array getBotConfig(?string $name = null)
 * @method static \Telegram\Bot\Api bot(?string $name = null)
 * @method static \Telegram\Bot\Api reconnect(?string $name = null)
 * @method static \Telegram\Bot\BotsManager disconnect(?string $name = null)
 * @method static bool hasBot(string $name)
 * @method static mixed getConfig(string $key, mixed $default = null)
 * @method static null|string getDefaultBotName()
 * @method static \Telegram\Bot\BotsManager setDefaultBot(string $name)
 * @method static array getBots()
 * @method static array parseBotCommands(array $commands)
 *
 * @see \Telegram\Bot\Api
 *
 * @method static \Telegram\Bot\BotsManager manager(array $config)
 * @method static bool kickChatMember(array $params)
 * @method static bool banChatMember(array $params)
 * @method static string exportChatInviteLink(array $params)
 * @method static \Telegram\Bot\Objects\ChatInviteLink createChatInviteLink(array $params)
 * @method static \Telegram\Bot\Objects\ChatInviteLink editChatInviteLink(array $params)
 * @method static \Telegram\Bot\Objects\ChatInviteLink revokeChatInviteLink(array $params)
 * @method static bool approveChatJoinRequest(array $params)
 * @method static bool declineChatJoinRequest(array $params)
 * @method static bool setChatPhoto(array $params)
 * @method static bool deleteChatPhoto(array $params)
 * @method static bool setChatTitle(array $params)
 * @method static bool setChatDescription(array $params)
 * @method static bool pinChatMessage(array $params)
 * @method static bool unpinChatMessage(array $params)
 * @method static bool unpinAllChatMessages(array $params)
 * @method static bool leaveChat(array $params)
 * @method static bool unbanChatMember(array $params)
 * @method static bool restrictChatMember(array $params)
 * @method static bool promoteChatMember(array $params)
 * @method static bool setChatAdministratorCustomTitle(array $params)
 * @method static bool banChatSenderChat(array $params)
 * @method static bool unbanChatSenderChat(array $params)
 * @method static bool setChatPermissions(array $params)
 * @method static \Telegram\Bot\Objects\Chat getChat(array $params)
 * @method static array getChatAdministrators(array $params)
 * @method static int getChatMemberCount(array $params)
 * @method static \Telegram\Bot\Objects\ChatMember getChatMember(array $params)
 * @method static bool setChatStickerSet(array $params)
 * @method static bool deleteChatStickerSet(array $params)
 * @method static bool setMyCommands(array $params)
 * @method static bool deleteMyCommands(array $params = [])
 * @method static array getMyCommands(array $params = [])
 * @method static \Telegram\Bot\Commands\CommandBus getCommandBus()
 * @method static \Telegram\Bot\Api setCommandBus(\Telegram\Bot\Commands\CommandBus $commandBus)
 * @method static \Telegram\Bot\Objects\Update|array commandsHandler(bool $webhook = false, ?\Psr\Http\Message\RequestInterface $request = null)
 * @method static void processCommand(\Telegram\Bot\Objects\Update $update)
 * @method static mixed triggerCommand(string $name, \Telegram\Bot\Objects\Update $update, ?array $entity = null)
 * @method static \Telegram\Bot\Objects\Message editMessageText(array $params)
 * @method static \Telegram\Bot\Objects\Message editMessageCaption(array $params)
 * @method static \Telegram\Bot\Objects\Message editMessageMedia(array $params)
 * @method static \Telegram\Bot\Objects\Message editMessageReplyMarkup(array $params)
 * @method static \Telegram\Bot\Objects\Poll stopPoll(array $params)
 * @method static bool deleteMessage(array $params)
 * @method static bool deleteMessages(array $params)
 * @method static \Telegram\Bot\Objects\Message sendGame(array $params)
 * @method static \Telegram\Bot\Objects\Message setGameScore(array $params)
 * @method static array getGameHighScores(array $params)
 * @method static \Telegram\Bot\Objects\User getMe()
 * @method static \Telegram\Bot\Objects\UserProfilePhotos getUserProfilePhotos(array $params)
 * @method static \Telegram\Bot\Objects\File getFile(array $params)
 * @method static null|\Psr\Container\ContainerInterface getContainer()
 * @method static bool hasContainer()
 * @method static void useEventDispatcher(\Telegram\Bot\Events\EventDispatcherListenerContract $emitter)
 * @method static \Telegram\Bot\Events\EventDispatcherListenerContract eventDispatcher()
 * @method static bool hasEventDispatcher()
 * @method static void on(string $event, callable $listener, int $priority = 0)
 * @method static \Telegram\Bot\Api setAsyncRequest(bool $isAsyncRequest)
 * @method static \Telegram\Bot\Api setHttpClientHandler(\Telegram\Bot\HttpClients\HttpClientInterface $httpClientHandler)
 * @method static \Telegram\Bot\Api setBaseBotUrl(string $baseBotUrl)
 * @method static null|\Telegram\Bot\TelegramResponse getLastResponse()
 * @method static string downloadFile(\Telegram\Bot\Objects\File|\Telegram\Bot\Objects\BaseObject|string $file, string $filename)
 * @method static string getAccessToken()
 * @method static \Telegram\Bot\Api setAccessToken(string $accessToken)
 * @method static bool isAsyncRequest()
 * @method static int getTimeOut()
 * @method static \Telegram\Bot\Api setTimeOut(int $timeOut)
 * @method static int getConnectTimeOut()
 * @method static \Telegram\Bot\Api setConnectTimeOut(int $connectTimeOut)
 * @method static \Telegram\Bot\TelegramClient getClient()
 * @method static \Telegram\Bot\Objects\Message sendLocation(array $params)
 * @method static \Telegram\Bot\Objects\Message editMessageLiveLocation(array $params)
 * @method static \Telegram\Bot\Objects\Message stopMessageLiveLocation(array $params)
 * @method static void macro($name, $macro)
 * @method static void mixin($mixin, $replace = true)
 * @method static void hasMacro($name)
 * @method static void flushMacros()
 * @method static void macroCall($method, $parameters)
 * @method static \Telegram\Bot\Objects\Message sendMessage(array $params)
 * @method static \Telegram\Bot\Objects\Message forwardMessage(array $params)
 * @method static \Telegram\Bot\Objects\Message copyMessage(array $params)
 * @method static \Telegram\Bot\Objects\Message sendPhoto(array $params)
 * @method static \Telegram\Bot\Objects\Message sendAudio(array $params)
 * @method static \Telegram\Bot\Objects\Message sendDocument(array $params)
 * @method static \Telegram\Bot\Objects\Message sendVideo(array $params)
 * @method static \Telegram\Bot\Objects\Message sendAnimation(array $params)
 * @method static \Telegram\Bot\Objects\Message sendVoice(array $params)
 * @method static \Telegram\Bot\Objects\Message sendVideoNote(array $params)
 * @method static \Telegram\Bot\Objects\Message sendMediaGroup(array $params)
 * @method static \Telegram\Bot\Objects\Message sendVenue(array $params)
 * @method static \Telegram\Bot\Objects\Message sendContact(array $params)
 * @method static \Telegram\Bot\Objects\Message sendPoll(array $params)
 * @method static \Telegram\Bot\Objects\Message sendDice(array $params)
 * @method static bool sendChatAction(array $params)
 * @method static bool setMessageReaction(array $params)
 * @method static void setPassportDataErrors(array $params)
 * @method static \Telegram\Bot\Objects\Message sendInvoice(array $params)
 * @method static bool answerShippingQuery(array $params)
 * @method static bool answerPreCheckoutQuery(array $params)
 * @method static bool answerCallbackQuery(array $params)
 * @method static bool answerInlineQuery(array $params)
 * @method static \Telegram\Bot\Objects\Message sendSticker(array $params)
 * @method static \Telegram\Bot\Objects\StickerSet getStickerSet(array $params)
 * @method static \Telegram\Bot\Objects\File uploadStickerFile(array $params)
 * @method static bool createNewStickerSet(array $params)
 * @method static bool addStickerToSet(array $params)
 * @method static bool setStickerPositionInSet(array $params)
 * @method static bool deleteStickerFromSet(array $params)
 * @method static bool setStickerSetThumb(array $params)
 * @method static array getUpdates(array $params = [], bool $shouldDispatchEvents = true)
 * @method static bool setWebhook(array $params)
 * @method static bool deleteWebhook()
 * @method static \Telegram\Bot\Objects\WebhookInfo getWebhookInfo()
 * @method static \Telegram\Bot\Objects\Update getWebhookUpdate(bool $shouldDispatchEvents = true, ?\Psr\Http\Message\RequestInterface $request = null)
 * @method static bool removeWebhook()
 * @method static \Telegram\Bot\Objects\ForumTopic createForumTopic(array $params)
 * @method static bool editForumTopic(array $params)
 * @method static bool closeForumTopic(array $params)
 * @method static bool reopenForumTopic(array $params)
 * @method static bool deleteForumTopic(array $params)
 *
 * @see \Telegram\Bot\Commands\CommandBus
 *
 * @method static array getCommands()
 * @method static \Telegram\Bot\Commands\CommandBus addCommands(iterable $commands)
 * @method static \Telegram\Bot\Commands\CommandBus addCommand(\Telegram\Bot\Commands\CommandInterface|string $command)
 * @method static \Telegram\Bot\Commands\CommandBus removeCommand(string $name)
 * @method static \Telegram\Bot\Commands\CommandBus removeCommands(array $names)
 */
final class Telegram extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return BotsManager::class;
    }
}
