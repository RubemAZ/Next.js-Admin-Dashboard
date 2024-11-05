import Layout from './layout';
import { Button } from 'antd';

export default function Home() {
    return (
        <Layout>
            <div>
                <h1>Bem-vindo ao nosso Hotsite!</h1>
                <p>Este é um template inicial utilizando Next.js e Ant Design.</p>
                <Button type="primary" >Saiba Mais</Button>
            </div>
        </Layout>
    );
}