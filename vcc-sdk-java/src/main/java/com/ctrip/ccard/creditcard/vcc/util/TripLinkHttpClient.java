package com.ctrip.ccard.creditcard.vcc.util;

import com.ctrip.ccard.creditcard.vcc.exception.HttpException;

import javax.net.ssl.HttpsURLConnection;
import javax.net.ssl.SSLContext;
import javax.net.ssl.SSLSocketFactory;
import javax.net.ssl.TrustManager;
import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.net.URL;

/**
 * Description: https请求vcc接口
 */
public class TripLinkHttpClient implements HttpClient {

    private static final String HTTP_METHOD_POST = "POST";

    private static final String CHARSET_NAME = "utf-8";

    private static final String CONTENT_TYPE = "Content-Type";

    private static final String CONTENT_TYPE_JSON_CONTENT = "application/json";

    public String post(String requestJson, String url) {
        try {
            return httpsRequest(url,HTTP_METHOD_POST,requestJson);
        } catch (Exception e) {
            throw new HttpException("request vcc exception",e);
        }
    }

    /**
     * 发送https请求
     * @param requestUrl 请求地址
     * @param requestJsonInfo 入参
     * @return
     * @throws Exception
     */
    private static String httpsRequest(String requestUrl,String httpMethod,String requestJsonInfo) throws Exception{
        StringBuffer stringBuffer = null;
        //请求数据流
        OutputStream outputStream = null;
        //服务端返回的报文流
        InputStream inputStream = null;
        InputStreamReader inputStreamReader = null;
        BufferedReader bufferedReader = null;
        try{
            //创建SSLContext
            SSLContext sslContext  = SSLContext.getInstance("SSL");
            TrustManager[] tm ={ new SslTrustManager() };
            //SSLContext 初始化
            sslContext.init(null, tm, new java.security.SecureRandom());;
            //获取SSLSocketFactory对象
            SSLSocketFactory ssf = sslContext.getSocketFactory();
            //Connect 创建初始化
            URL url = new URL(requestUrl);
            HttpsURLConnection conn = (HttpsURLConnection)url.openConnection();
            conn.setDoOutput(true);
            conn.setDoInput(true);
            conn.setUseCaches(false);
            conn.setRequestMethod(httpMethod);
            conn.setSSLSocketFactory(ssf);
            conn.setRequestProperty(CONTENT_TYPE, CONTENT_TYPE_JSON_CONTENT);
            //往服务器端写内容
            if(null != requestJsonInfo){
                outputStream = conn.getOutputStream();
                outputStream.write(requestJsonInfo.getBytes(CHARSET_NAME));
            }
            conn.connect();
            if(200 != conn.getResponseCode()){
                throw new Exception("response not 200");
            }
            //读取服务器端返回的内容
            inputStream = conn.getInputStream();
            inputStreamReader = new InputStreamReader(inputStream,CHARSET_NAME);
            bufferedReader = new BufferedReader(inputStreamReader);
            stringBuffer = new StringBuffer();
            String line = null;
            while((line = bufferedReader.readLine())!= null){
                stringBuffer.append(line);
            }
        }finally {
            //关闭流
            if(null != outputStream)  outputStream.close();
            if(null != inputStream)  inputStream.close();
            if(null != inputStreamReader) inputStreamReader.close();
            if(null != bufferedReader)  bufferedReader.close();
        }
        return stringBuffer.toString();
    }
}